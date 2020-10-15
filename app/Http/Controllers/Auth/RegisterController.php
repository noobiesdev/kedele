<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Helpers\PhoneHelper as phone;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
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
            'password.confirmed' => 'Pastikan kata sandi konfirmasi sesuai',
            'role.required'     => 'Pastikan pilih salah satu keperluan anda dalam mendaftar',
        ];
        $dataValidator = [
            'nama'      => ['required', 'string', 'min:5', 'max:128'],
            'username'  => ['required', 'string', 'min:5', 'max:32', 'unique:user,username','alpha_dash'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'no_hp'     => ['required', 'numeric', 'digits_between:10,14'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'role'      => ['required', 'string', 'max:8'],
        ];
        return Validator::make($data, $dataValidator, $customMessage);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Array $data)
    {
        $validation = $this->validator($data);
        if ($validation->fails()) {
            return response()->json(['status' => false , 'message' => $validation->errors()->all()], 400);
        }
        $user =  User::create([
            'nama'      => $data['nama'],
            'username'  => $data['username'],
            'email'     => $data['email'],
            'no_hp'     => phone::validate($data['no_hp']),
            'password'  => Hash::make($data['password']),
            'level'     => $data['role'],
        ]);
        if ($data['role'] == "produsen") {
            $user->assignRole('produsen');
        }else if($data['role'] == "konsumen"){
            $user->assignRole('konsumen');
        }
        return $user;
    }
}
