<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function lista(){
       $data['getRecord'] = User::getAdmin();
        $data['header_title'] = 'Admin lista';
        return view('admin.admin.lista', $data);
    }

    public function add(){

        $data['header_title'] = 'add novo Admin ';
        return view('admin.admin.add', $data);
    }

    public function insert (Request $request){
     // dd($request->all());
      $user = new user;
      $user->name= trim($request->name);
      $user->email= trim($request->email);
      $user->password= Hash::make($request->password);
      $user->user_type= 1;
      $user->save();
      return redirect('admin/admin/lista')->with('error', "Adicionado com sucesso");
    }
}
