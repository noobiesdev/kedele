<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Helpers\CryptoHelper as ncrypt;
use App\Helpers\PriceHelper as price;

class ProdukController extends Controller
{
    public function get_usaha($uid) {
        // $id = DB::table('usaha')->where('id', $uid);
        $id = \App\Usaha::findOrFail($uid);
        return $id;
    }

    public function index(Request $request)
    {
        $usaha = self::get_usaha(Auth::user()->id);
        // $edit = isset($request->produk)? $request->produk : '';
        if( isset($request->produk) && !is_null($request->produk) ){
            $edit = $request->produk;
            $edit = \App\Produk::where('slug',$edit)->where('id_usaha', $usaha['id'])->first();
        }else{
            $edit = '';
        }
        return view('produk.index', compact('usaha', 'edit'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $usaha = self::get_usaha(Auth::user()->id);
        if ($request->hasFile('gambar')) {
            $uploadFile = $request->file('gambar');
            $destinationPath = 'uploads/produk/';// upload path
            $fileName = date('YmdHis'). '-' . Str::random(25) . "_produk.".$uploadFile->getClientOriginalExtension();
            $uploadFile->move($destinationPath, $fileName);
            $fileName = $destinationPath.$fileName;
        }else{
            $fileName = 'assets/images/default_produk.png';
        }
        $input['harga'] = price::clear($input['harga']);
        $dataValidator = [
            'whatsapp' => 'numeric|digits_between:10,14',
            'slug' => 'string|unique:produk,slug|alpha_dash',
            'gambar' => 'mimes:jpeg,jpg,png',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return redirect()->back()->with('error', 'Kesalahan saat menambahkan! '.$validator->errors()->first());
        }
        $input = [
          'id_usaha'        => $usaha->id,
          'nama'            => $input['nama'],
          'slug'            => $input['slug'],
          'deskripsi'       => $input['deskripsi'],
          'kebutuhan_bahan' => $input['kebutuhan_bahan'],
          'harga'           => $input['harga'],
          'gambar'          => $fileName
        ];

        if(\App\Produk::create($input)) {
            return redirect()->route('produksi.index')->with('success', 'Berhasil menambahkan produk');
        }
        return redirect()->route('produksi.index')->with('error', 'Kesalahan saat menambahkan produk');
    }

    public function update(Request $request, $slug)
    {
        $input = $request->all();
        $usaha = self::get_usaha(Auth::user()->id);
        $input['harga'] = price::clear($input['harga']);
        if ($request->hasFile('gambar')) {
            $uploadFile = $request->file('gambar');
            $destinationPath = 'uploads/produk/';// upload path
            $fileName = date('YmdHis'). '-' . Str::random(25) . "_produk.".$uploadFile->getClientOriginalExtension();
            $uploadFile->move($destinationPath, $fileName);
            $fileName = $destinationPath.$fileName;
        }else{
            $fileName = 'assets/images/default_produk.png';
        }
        $input = [
          'nama'            => $input['nama'],
          'slug'            => $input['slug'],
          'deskripsi'       => $input['deskripsi'],
          'kebutuhan_bahan' => $input['kebutuhan_bahan'],
          'harga'           => $input['harga'],
          'gambar'          => $fileName
        ];
        $produk = $usaha->produks->where('slug',$slug)->first();
        if($produk->update($input)) {
            return redirect()->route('produksi.index')->with('success', 'Berhasil memperbarui produk');
        }
        return redirect()->route('produksi.index')->with('error', 'Kesalahan saat memperbarui produk');
    }

    public function destroy(Request $request)
    {
        $usaha = self::get_usaha(Auth::user()->id);
        if( isset($request->produk) && !is_null($request->produk) ){
            $delete = $request->produk;
            $delete = \App\Produk::where('slug',$delete)->where('id_usaha', $usaha['id'])->first();
        }else{
            $delete = '';
        }
        $bahan = \App\Pupuk::find($id);
        if($bahan->get()->isEmpty()){
            redirect()->route('pupuk.index')->with('error', 'Gagal menghapus pupuk/ pupuk tidak ditemukan.');
        }
        $bahan->delete();
        return redirect()->route('pupuk.index')->with('success', 'Pupuk berhasil dihapus');
    }
}
