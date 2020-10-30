<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Helpers\PhoneHelper as phone;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Session;

class WebsiteUsahaController extends Controller
{
    public function get_usaha($uid) {
        // $id = DB::table('usaha')->where('id', $uid);
        $id = \App\Usaha::findOrFail($uid);
        return $id;
    }

    public function get_usaha_byslug($slug) {
        $usaha = \App\Usaha::where('slug',$slug)->first();
        if($usaha == null){
            return redirect()->route('landing')->with('error', 'Lapak tidak ditemukan');
        }
        return $usaha;
    }

    # =-=-=-=-=-=-=-= WEBSITE PENGUSAHA =-=-=-=-=-=-=-= #
    public function show($slug) {
      $usaha    = self::get_usaha_byslug($slug);
      $usaha_id = $usaha->id_pengusaha;
      $terjual = \App\Pembelian::where('id_usaha',$usaha->id)->count();
      if( $usaha['status'] != 'act'){
          return redirect()->route('landing')->with('error', 'Lapak pengusaha sedang tutup sementara waktu');
      }
      return view('usaha.default.show', compact('usaha', 'terjual'));
    }

    public function product($slug, $produk) {
      $usaha  = self::get_usaha_byslug($slug);
      $produk = $usaha->produks->where('slug', $produk)->first();
      return view('usaha.default.product', compact('usaha', 'produk'));
    }

    # =-=-=-=-=-=-=-= PENGELOLAAN CART =-=-=-=-=-=-=-= #
    public function cart($slug) {
      $usaha = self::get_usaha_byslug($slug);
      $carts = Session::get('cart');
      if($carts == null) {
          Session::flash('error', 'Keranjang belanja kosong, Tidak ada produk ditambahkan');
          return redirect()->back();
      }
      return view('usaha.cart', compact('usaha', 'carts'));
    }
    public function addToCart(Request $request, $slug) {
        if ($request['jumlah'] < 1){
            Session::flash('error', 'Jumlah produk minimal sebanyak 1');
            return redirect()->back();
        }
        $usaha  = self::get_usaha_byslug($slug);
        $produk = $usaha->produks->where('slug', $request['produk'])->first();
        $cart = Session::get('cart');
        $cart[$produk->slug] = array(
            "id" => $produk->slug,
            "nama" => $produk->nama,
            "harga" => $produk->harga,
            "gambar" => $produk->gambar,
            "jumlah" => intval($request['jumlah']),
        );
        Session::put('cart', $cart);
        Session::flash('success', $produk->nama.' berhasil ditambah ke keranjang!');
        return redirect()->back();
    }

    public function updateCart(Request $cartdata) {
        $cart = Session::get('cart');
        foreach ($cartdata->all() as $id => $val) {
            if ($val > 0) {
                $cart[$id]['jumlah'] += $val;
            } else {
                unset($cart[$id]);
            }
        }
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function clearCart(Request $request){
      if( $request['action'] == "clear" ) {
        $cart = Session::flush();
        Session::flash('success', 'Keranjang belanja berhasil dikosongkan');
        return redirect('/'.$request['toko']);
      }else{
        $cart = Session::get('cart');
        $nama = $cart[$request['target']]['nama'];
        unset($cart[$request['target']]);
        Session::put('cart', $cart);
        if( count($cart)<1 ) {
          Session::flash('success', $nama.' dihapus dari kerangjang belanja');
          return redirect('/'.$request['toko']);
        }
        Session::flash('success', $nama.' dihapus dari kerangjang belanja');
        return redirect()->back();
      }

    }
    public function checkout(){
      $cart = Session::get('cart');
      return view('usaha.checkout', compact('cart'));
    }


    # =-=-=-=-=-=-=-= PENGELOLAAN USAHA =-=-=-=-=-=-=-= #
    public function banner()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $usaha = $usaha->website()->first();
        return view('desain.banner', compact('usaha'));
    }
    public function lokasi()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $usaha = $usaha->website()->first();
        return view('desain.lokasi', compact('usaha'));
    }
    public function kontak()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $usaha = $usaha->website()->first();
        return view('desain.kontak', compact('usaha'));
    }
    public function update(Request $request)
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $input = $request->all();
        $usaha = \App\Usaha::findOrFail($usaha->id);
        # validation start
        if ( isset($input['whatsapp']) ){
          $input['whatsapp'] = phone::validate($input['whatsapp']);
        }
        $dataValidator = [
            'whatsapp' => 'numeric|digits_between:10,14',
            'facebook' => 'max:32',
            'twitter' => 'max:32',
            'instagram' => 'max:32',
            'marketplace' => 'max:64',
            'gambar_jumbotron' => 'mimes:jpeg,jpg,png|dimensions:min_width=500,max_width=1500',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
          dd($validator->errors());
            return redirect()->back()->with('error', 'Kesalahan saat menyimpan! '.$validator->errors()->first());
        }
        #validation end
        unset($input['_token'], $input['files']);
        if($usaha->website()->update($input)) {
            return redirect()->back()->with('success', 'Berhasil disimpan');
        }
        return redirect()->back()->with('error', 'Kesalahan saat menyimpan');
    }

#   =-=-=-=-=-=-=-=-= Masa Aktif =-=-=-=-=-=-=-=-=
    public function check_masa_aktif()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        if ($usaha->masa_aktif->isFuture() ) {
            return true;
        }
        else{
            self::ubah_status($usaha->id, false);
            return false;
        }
    }
    public function update_masa_aktif($id, $bulan)
    {
      $date = Carbon::createFromFormat('Y.m.d', Carbon::now());
      $date = $date->addMonth($bulan);
      $usaha->update([
        'status' => "act",
        'masa_aktif' => $date,
      ]);
    }
    public function ubah_status($id, $status)
    {
        $usaha = \App\Usaha::findOrFail($id);
        if( $status ) {
            $usaha->update([
              'status' => "act",
            ]);
        }else{
            $usaha->update([
              'status' => "non",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
