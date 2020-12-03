<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Helpers\PhoneHelper as phone;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $kategori = \App\Kategori::all();
      $data_supplier = \App\Supplier::all();
      $edit    = '';
      if( isset($request->edit) && !is_null($request->edit) ){
          $edit = $request->edit;
          $edit = \App\Supplier::where('id',$edit)->first();
      }
      return view('supplier.index',compact('data_supplier','edit', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request['no_hp'] = phone::validate($request['no_hp']);
      $customMessage = [
          'nama.required'      => 'Nama lengkap wajib diisi',
          'nama.min'           => 'Nama lengkap minimal terdiri sebanyak :min karakter',
          'nama.max'           => 'Nama lengkap maksimal terdiri sebanyak :max karakter',
          'username.required'  => 'Nama pengguna wajib diisi. Contoh: budianduk',
          'username.min'       => 'Nama pengguna minimal terdiri sebanyak :min karakter',
          'username.max'       => 'Nama pengguna maksimal terdiri sebanyak :max karakter',
          'username.unique'    => 'Nama pengguna yang anda masukan telah terdaftar, silahkan gunakan nama pengguna lain',
          'username.alpha_dash'=> 'Nama pengguna tidak boleh menggunakan karakter spasi',
          'email.required'     => 'Email wajib diisi',
          'email.min'          => 'Email minimal terdiri sebanyak :max karakter',
          'email.max'          => 'Email maksimal terdiri sebanyak :max karakter',
          'email.unique'       => 'Email yang anda masukan telah terdaftar, silahkan gunakan email lain',
          'no_hp.required'       => 'Nomor telepon wajib diisi',
          'no_hp.numeric'        => 'Pastikan nomor telepon yang dimasukkan berupa angka',
          'no_hp.digits_between' => 'Nomor telepon harus memiliki panjang minimal :min digit dan maksimal :max digit',
          'password.required'  => 'Kata sandi wajib diisi',
          'password.string'    => 'Kata sandi harus terdiri dari teks',
          'password.min'       => 'Kata sandi minimal terdiri sebanyak :min karakter',
          'role.required'     => 'Pastikan pilih salah satu keperluan anda dalam mendaftar',

      ];
      $dataValidator = [
          'nama'      => ['required', 'string', 'min:5', 'max:128'],
          'no_hp'     => ['required', 'numeric', 'digits_between:10,14'],
          'alamat'    => ['required', 'string'],
      ];
      $validator = Validator::make($request->all(), $dataValidator, $customMessage);
      if($validator->fails()){
          return redirect()->back()->with('error', 'Kesalahan saat menambahkan! '.$validator->errors()->first());
      }
      $user =  \App\Supplier::create([
          'nama'      => $request['nama'],
          'facebook'  => $request['facebook'],
          'kategori'  => $request['kategori'],
          'twitter'  => $request['twitter'],
          'instagram'  => strtolower($request['instagram']),
          'whatsapp'     => phone::validate($request['no_hp']),
          'maps'    => $request['alamat'],
      ]);

      return redirect()->back()->with('success', 'Pengguna berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
      $input = $request->all();
      $user = \App\Supplier::where('id',$id)->first();
      if(isset($input['no_hp'])) {
        $input['no_hp'] = phone::validate($request['no_hp']);
      }
      if($user->update($input)) {
          return redirect()->route('supplier.index')->with('success', 'Data Pengguna berhasil diperbarui');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if( isset($request->user) && !is_null($request->user) ){
          $delete = $request->user;
          $delete = \App\Supplier::where('id',$delete)->first();
          if($delete->delete()){
            return redirect()->back()->with('success', 'Supplier berhasil dihapus!');
          }
      }else{
          $delete = '';
      }
          return redirect()->back()->with('error', 'Gagal menghapus supplier tidak ditemukan.');
    }
}
