<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Helpers\PhoneHelper as phone;

class AkunController extends Controller
{

    public function index()
    {
        $id =  Auth::user()->id;
        $user = \App\User::where('id', $id)->first();
        return view('akun.index',compact('user'));
    }

    public function update(Request $request)
    {
      $input = $request->all();
      $id =  Auth::user()->id;
      $user = \App\User::where('id', $id)->first();
      if(isset($input['old_password2'])){
          #To update Profil section
          $customMessage = [
              'password.required'  => 'Kata sandi wajib diisi',
              'password.string'    => 'Kata sandi harus terdiri dari teks',
              'password.min'       => 'Kata sandi minimal terdiri sebanyak :min karakter',
              'old_password2.required'  => 'Kata sandi wajib diisi',
              'old_password2.string'    => 'Kata sandi harus terdiri dari teks',
              'old_password2.min'       => 'Kata sandi minimal terdiri sebanyak :min karakter',
          ];
          $dataValidator = [
              'password'  => ['required', 'string', 'min:8'],
              'old_password2' => ['required', 'string', 'min:8'],
          ];
      }else{
          #To update Akun section
          $customMessage = [
              'nama.required'      => 'Nama lengkap wajib diisi',
              'nama.min'           => 'Nama lengkap minimal terdiri sebanyak :min karakter',
              'nama.max'           => 'Nama lengkap maksimal terdiri sebanyak :max karakter',
              'no_hp.required'     => 'Nomor telepon wajib diisi',
              'no_hp.string'      => 'Pastikan nomor telepon yang dimasukkan berupa angka',
              'no_hp.min'          => 'Nomor telepon minimal terdiri sebanyak :min karakter',
              'no_hp.max'          => 'Nomor telepon maksimal terdiri sebanyak :max karakter',
              'old_password.required'  => 'Kata sandi wajib diisi',
              'old_password.string'    => 'Kata sandi harus terdiri dari teks',
              'old_password.min'       => 'Kata sandi minimal terdiri sebanyak :min karakter',
          ];
          $dataValidator = [
              'nama'      => ['required', 'string', 'min:5', 'max:128'],
              'no_hp'     => ['required', 'string', 'min:10', 'max:16'],
              'old_password' => ['required', 'string', 'min:8'],
          ];
      }
      $validation = Validator::make($request->all(), $dataValidator, $customMessage);

        if ($validation->fails()) {
            return redirect()->back()->with('error', 'Gagal memperbarui informasi profil')
                        ->withErrors($validation)
                        ->withInput();
        }

        if(isset($input['no_hp'])){
            $input['no_hp'] = phone::validate($input['no_hp']);
        }
        if(isset($input['old_password2'])){
            $oldpass = $input['old_password2'];
        }else{
            $oldpass = $input['old_password'];
        }
        if(Hash::check($oldpass, $user->password)){
          unset( $input['old_password'] );
          if(isset($input['password'])){
            $input['password'] = Hash::make($input['password']);
          }
          $user->update($input);
          return redirect()->route('akun')->with('success', 'Profil berhasil disimpan');
        }else{
          return redirect()->route('akun')->with('error', 'Kata Sandi konfirmasi tidak sesuai');
        }
    }

    public function manage(Request $request)
    {
        $users = \App\User::all();
        $removed = '';
        $role    = '';
        $edit    = '';
        if( isset($request->role) && !is_null($request->role) ){
            $role = $request->role;
            $users = \App\User::where('level','like',$role)->get();
        }
        if( isset($request->removed) && !is_null($request->removed) && $request->removed== "true"){
            $removed = $request->removed;
            $users = \App\User::onlyTrashed()->get();
        }
        if( isset($request->edit) && !is_null($request->edit) ){
            $edit = $request->edit;
            $edit = \App\User::where('username',$edit)->first();
        }

        return view('akun.manage', compact('users','role','removed','edit'));
    }


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
            'username'  => ['required', 'string', 'min:5', 'max:32', 'unique:user,username','alpha_dash'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'no_hp'     => ['required', 'numeric', 'digits_between:10,14'],
            'password'  => ['required', 'string', 'min:8'],
            'role'      => ['required', 'string', 'max:8'],
            'alamat'    => ['required', 'string'],
        ];
        $validator = Validator::make($request->all(), $dataValidator, $customMessage);
        if($validator->fails()){
            return redirect()->back()->with('error', 'Kesalahan saat menambahkan! '.$validator->errors()->first());
        }
        $user =  \App\User::create([
            'nama'      => $request['nama'],
            'username'  => strtolower($request['username']),
            'email'     => $request['email'],
            'no_hp'     => phone::validate($request['no_hp']),
            'password'  => Hash::make($request['password']),
            'level'     => $request['role'],
            'alamat'    => $request['alamat'],
        ]);
        $user->assignRole($request['role']);

        if($request['role'] == 'produsen'){
            $usaha = \App\Usaha::create([
              'id_pengusaha' => $user->id,
              'nama'      => "Toko ".$request['username'],
              'slug'      => "toko-".strtolower($request['username']),
            ]);
            $website = \App\Website::create([
              'id_usaha' => $usaha->id,
              'judul_jumbotron' => $usaha->nama,
              'whatsapp' => $user->no_hp,
            ]);
        }
        if($user){
          return redirect()->back()->with('success', 'Pengguna berhasil ditambahkan!');
        }
        return redirect()->back()->with('error', 'Kesalahan saat menambahkan pengguna! ');
    }

    public function edit(Request $request, $username)
    {
        $input = $request->all();
        $user = \App\User::where('username',$username)->first();
        if(isset($input['password'])) {
          $input['password'] = Hash::make($request['password']);
        }else{
          $input['password'] = $user->password;
        }
        if(isset($input['password'])) {
          $input['no_hp'] = phone::validate($request['no_hp']);
        }
        if($user->update($input)) {
            return redirect()->route('admin.manage')->with('success', 'Data Pengguna berhasil diperbarui');
        }
    }

    public function destroy(Request $request)
    {
        if( isset($request->user) && !is_null($request->user) ){
            $delete = $request->user;
            $delete = \App\User::where('username',$delete)->first();
            if($delete->delete()){
              return redirect()->back()->with('success', 'Pengguna berhasil diblokir');
            }
        }else{
            $delete = '';
        }
            return redirect()->back()->with('error', 'Gagal memblokir pengguna/ pengguna tidak ditemukan.');
    }

    public function revert(Request $request)
    {
        $user = DB::table('user')->where('username',$request->user);
        if($user->get()->isEmpty()){
            return redirect()->back()->with('error', 'Gagal mengembalikan pengguna/ pengguna tidak ditemukan.');
        }
        $user->update([
          'deleted_at'    => null
        ]);
        return redirect()->back()->with('success', 'Pengguna berhasil dikembalikan.');
    }

}
