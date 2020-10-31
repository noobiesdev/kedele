<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Helpers\PhoneHelper as phone;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Session;

class PublicWebsiteController extends Controller
{
      public static function get_usaha($uid)
      {
          $id = \App\Usaha::findOrFail($uid);
          return $id;
      }

      public static function get_usaha_byslug($slug)
      {
          $usaha = \App\Usaha::where('slug',$slug)->first();
          if($usaha == null){
              return false;
          }
          return $usaha;
      }
      # =-=-=-=-=-=-=-= WEBSITE PENGUSAHA =-=-=-=-=-=-=-= #
      public function show(Request $request, $slug)
      {
          $usaha    = self::get_usaha_byslug($slug);
          if($usaha == false){
            return redirect()->route('landing')->with('error', 'Lapak tidak ditemukan');
          }
          $order = isset($request->order) and !is_null($request->order)? true : '';
          $usaha_id = $usaha->id_pengusaha;
          $terjual = \App\Pembelian::where('id_usaha',$usaha->id)->count();
          if( $usaha['status'] != 'act'){
              return redirect()->route('landing')->with('error', 'Lapak pengusaha sedang tutup sementara waktu');
          }
          return view('usaha.default.show', compact('usaha', 'terjual', 'order'));
      }

      public function product($slug, $produk)
      {
          $usaha  = self::get_usaha_byslug($slug);
          $produk = $usaha->produks->where('slug', $produk)->first();
          return view('usaha.default.product', compact('usaha', 'produk'));
      }

      # =-=-=-=-=-=-=-= PENGELOLAAN CART =-=-=-=-=-=-=-= #
      public function cart(Request $request, $slug)
      {
          $usaha = self::get_usaha_byslug($slug);
          $carts = Session::get('cart');
          if($carts == null) {
              Session::flash('error', 'Keranjang belanja kosong, Tidak ada produk ditambahkan');
              return redirect()->back();
          }
          $order = isset($request->order) and !is_null($request->order)? true : '';
          $auth = isset($request->auth) and !is_null($request->auth)? true : '';
          $subTotal = 0;
          foreach ($carts as $cart) {
            $subTotal += $cart['harga']*$cart['jumlah'];
          }
          $tax   = $subTotal/10;
          $admin = 5000;
          $total = $subTotal + $tax + $admin;
          $bill  = array('subTotal' => $subTotal, 'tax' => $tax , 'admin' => $admin, 'total' => $total);
          return view('usaha.cart', compact('usaha', 'carts', 'bill', 'order', 'auth'));
      }
      public function addToCart(Request $request, $slug)
      {
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

      public function updateCart(Request $cartdata)
      {
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
      public function clearCart(Request $request)
      {
          if( $request['action'] == "clear" ) {
            $cart = Session::forget('cart');
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
      public function checkout(Request $request)
      {
          #Masukkan data
          if( Auth::check() ){
              self::beliProduk(Auth::user()->id, $request['toko']);
              return redirect()->to(route('landing').'/'.$request['toko'].'?order=true');
          }else{
              return redirect()->to(route('landing').'/'.$request['toko'].'/keranjang?auth=true');
          }
      }

      public function checkoutNonAuth(Request $request)
      {
          $cart = Session::get('cart');
          #Check user
          $request['no_hp'] = phone::validate($request['no_hp']);
          $user = \App\User::where('no_hp', $request['no_hp'])->first();
          if( $user == null) {
            #membuat User
              $guest = str_random(8);
              $user =  \App\User::create([
                  'nama'      => $request['nama'],
                  'username'  => "guest_".$guest,
                  'no_hp'     => phone::validate($request['no_hp']),
                  'password'  => Hash::make($guest),
                  'level'     => 'konsumen',
                  'alamat'    => $request['alamat']
              ]);
              $user->assignRole('konsumen');
              auth()->attempt([
                  'no_hp' => $request['no_hp'],
                  'password' => $guest
              ]);
          }else{
              Session::flash('error', 'Informasi yang anda berikan sudah terdaftar sebagai pengguna' );
              return redirect()->back();
          }
          #Masukkan data
          $uid = $user->id;
          self::beliProduk($uid, $request['toko']);
          return redirect()->to(route('landing').'/'.$request['toko'].'?order=true');
      }

      public static function beliProduk($uid, $usahaSlug)
      {
          $user  = \App\User::where('id', $uid)->first();
          $usaha = self::get_usaha_byslug($usahaSlug);
          $carts = Session::get('cart');
          $subTotal = 0;
          $text_produk ='';
          $i = 0;
          foreach ($carts as $key => $cart) {
            $i +=1;
            $subTotal += $cart['harga']*$cart['jumlah'];
            $text_produk .= "$i. *".$cart['nama'].'*- sebanyak '.$cart['jumlah'].'%0A';
          }
          $tax   = $subTotal/10;
          $admin = 5000;
          $total = $subTotal + $tax + $admin;

          $pembelian = \App\Pembelian::create([
            'id_pembeli'    => $uid,
            'id_usaha'      => $usaha->id,
            'kode_pemesanan'=> str_random(6),
            'total_harga'   => $total,
            'alamat'        => $user->alamat,
            'status'        => 'dipesan',
          ]);
          foreach ($carts as $cart) {
            $pid = \App\Produk::where('slug',$cart['id'])->first()->id;
            $detail_pembelian = \App\DetailPembelian::create([
              'id_pembelian'  => $pembelian->id,
              'id_produk'     => $pid,
              'jumlah'        => $cart['jumlah'],
            ]);
          }
          $text = "Halo, $usaha->nama, %0ASaya ".$usaha->user->nama." hendak membeli produk:%0A$text_produk";
          $raw = urldecode($text);
          Session::flash('raw', $raw);
          $text = urlencode($text);
          $text = str_replace('%250A', '%0A', $text);
          Session::forget('cart');
          Session::flash('message', $text);
          return redirect()->to(route('landing').'/'.$usahaSlug.'?order=true');
      }
}
