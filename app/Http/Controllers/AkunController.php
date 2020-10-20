<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Helpers\PhoneHelper as phone;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =  Auth::user()->id;
        $user = \App\User::where('id', $id)->first();
        return view('akun.index',compact('user'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $input = $request->all();
      $id =  Auth::user()->id;
      $user = \App\User::where('id', $id)->first();

      $customMessage = [
          'nama.required'      => 'Nama lengkap wajib diisi',
          'nama.min'           => 'Nama lengkap minimal terdiri sebanyak :min karakter',
          'nama.max'           => 'Nama lengkap maksimal terdiri sebanyak :max karakter',
          'no_hp.required'       => 'Nomor telepon wajib diisi',
          'no_hp.numeric'        => 'Pastikan nomor telepon yang dimasukkan berupa angka',
          'no_hp.digits_between' => 'Nomor telepon harus memiliki panjang minimal :min digit dan maksimal :max digit',
          'old_password.required'  => 'Kata sandi wajib diisi',
          'old_password.string'    => 'Kata sandi harus terdiri dari teks',
          'old_password.min'       => 'Kata sandi minimal terdiri sebanyak :min karakter',
      ];
      $dataValidator = [
          'nama'      => ['required', 'string', 'min:5', 'max:128'],
          'no_hp'     => ['required', 'numeric', 'digits_between:10,14'],
          'old_password' => ['required', 'string', 'min:8'],
      ];
      $validation = Validator::make($request->all(), $dataValidator, $customMessage);

        if ($validation->fails()) {
            return redirect('/akun')
                        ->withErrors($validation)
                        ->withInput();
        }


        if(isset($input['no_hp'])){
            $input['no_hp'] = phone::validate($input['no_hp']);
        }
        $oldpass = $input['old_password'];
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
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update2(Request $request)
    {
        $input = $request->all();
        $id =  Auth::user()->id;
        $user = \App\User::where('id', $id)->first();

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
        $validation = Validator::make($request->all(), $dataValidator, $customMessage);

        if ($validation->fails()) {
          return redirect('/akun')
                      ->withErrors($validation)
                      ->withInput();
        }


        if(isset($input['no_hp'])){
            $input['no_hp'] = phone::validate($input['no_hp']);
        }
        $oldpass = $input['old_password2'];
        if(Hash::check($oldpass, $user->password)){
          unset( $input['old_password2'] );
          if(isset($input['password'])){
            $input['password'] = Hash::make($input['password']);
          }
          $user->update($input);
          return redirect()->route('akun')->with('success', 'Profil berhasil disimpan');
        }else{
          return redirect()->route('akun')->with('error', 'Kata Sandi konfirmasi tidak sesuai');
        }
    }



}
