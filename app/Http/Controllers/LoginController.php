<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function index(){
        return view('login');
    }
    public function login(Request $request){
        // dd('$');
        // dd('$request');  
        $cre= $request->only('email', 'password');
        if (Auth::guard('user')->attempt($cre)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        if (Auth::guard('pemilih')->attempt($cre)){
            $request->session()->regenerate();
            return redirect('/pemilih');
        }
            return back();
    }
    public function logout(){
        if (Auth::guard('pemilih')->check()){
            Auth::guard('pemilih')->logout();
        } else{
            Auth::guard('user')->logout();
        }
        return redirect('/login');
    }
}
