<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Helpers\PhoneHelper as phone;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string', //VALIDASI KOLOM USERNAME
            'password' => 'required|string|min:8',
        ]);
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)){
          $loginType = 'email';
        }else if (filter_var($request->username, FILTER_VALIDATE_INT) or substr(trim ($request->username), 0, 2) == '08'){
          $loginType = 'no_hp';
        }else{
          $loginType = 'username';
        }
        // $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_INT) ? 'email' : 'no_hp';
        if($loginType == 'no_hp') {
            $request->username = phone::validate($request->username);
        }
        $login = [
            $loginType => strtolower($request->username),
            'password' => $request->password
        ];

        //LAKUKAN LOGIN
        if (auth()->attempt($login)) {
            //JIKA BERHASIL, MAKA REDIRECT KE HALAMAN HOME
            return redirect()->route('dashboard');
        }
        //JIKA SALAH, MAKA KEMBALI KE LOGIN DAN TAMPILKAN NOTIFIKASI
        return redirect()->back()->with(['error' => 'Email/ No. telpon /Password salah!']);
    }
}
