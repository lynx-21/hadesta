<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Hash;
use Session;
use Browser;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register_v()
    {
        if(Browser::isMobile())
        {
            return 'Tampilan mobile sedang dalam pengembangan!';
        }else{
            return view('pages.auth.register');
        }
    }

    public function register_p(Request $req)
    {
        $req->validate([
            'full_name'         => 'required',
            'username'          => 'required|min:5',
            'email'             => 'required|email|unique:users',
            'password'          => 'required|min:8',
            'confirm_password'  => 'required|min:8|same:password',
        ]);
        
        User::create([
            'full_name'     => $req->full_name,
            'username'      => $req->username,
            'email'         => $req->email,
            'password'      => Hash::make($req->password),
            'updated_at'    => date('d F Y'),
            'created_at'    => date('d F Y'),
        ]);

        Session::flash('success_register', 'Berhasil daftar akun! Silahkan login...');
        return redirect()->back();
    }

    public function login_p(Request $req)
    {
        $req->validate([
            'username'  => 'required',
            'password'  => 'required',
        ]);
        Auth::attempt(['username' => $req->username, 'password' => $req->password]);

        if(Auth::check()){
            return redirect('/user');
        }else{
            Session::flash('failed_login', 'Username dan password salah!');
            return redirect('/');
        }
    }

    public function logout_p()
    {
        Auth::logout();

        Session::flash('logout', 'Anda telah logout!');
        return redirect('/');
    }
}
