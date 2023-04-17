<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller
{
     public function dashboard(){
        $data['header_title'] = 'Dashboard';
        if(Auth::user()->user_type==1){
            return view('admin.dashboard', $data);
        }
        else if(Auth::user()->user_type==2){
            return view('secretario.dashboard', $data);
        }
        else if(Auth::user()->user_type==3){
            return view('tesoureiro.dashboard', $data);
        }
     }
}
