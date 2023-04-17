<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function login(){
       // dd(Hash::make(123456));
       if (!empty(Auth::check())) {
        if (Auth::user()->user_type==1) {
            return redirect('admin/dashboard');
        }
        else if (Auth::user()->user_type==2) {
            return redirect('secretario/dashboard');
        }
        else if (Auth::user()->user_type==3) {
            return redirect('tesoureiro/dashboard');
        }
       }
        return view('auth.login');
    }

    public function AuthLogin(Request $request){
       // dd($request->all());
        $remember =!empty($request->remember) ? true: false;
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
        if (Auth::user()->user_type==1) {
            return redirect('admin/dashboard');
        }
        else if (Auth::user()->user_type==2) {
            return redirect('secretario/dashboard');
        }
        else if (Auth::user()->user_type==3) {
            return redirect('tesoureiro/dashboard');
        }

       } else{
        return redirect()->back()->with('error', 'Email ou palavra-passe errada');
       }
    }

    public function logout(){
        Auth::logout();
        return redirect(url(''));
    }


}
