<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showLogin(){
        return view('Login');
    }

    function LoginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('Beranda')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login gagal, silahkan cek Email dan Password anda');
        }

    }

    function logout(){
        Auth::logout();
        return redirect('Beranda');
    }

    function registration(){

    }

    function forgotPassword(){

    }

}
