<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;
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
     request()->validate([
        'email' => 'required|email|unique:users'
     ]);
      $user = new user;
      $user->name= trim($request->name);
      $user->email= trim($request->email);
      $user->password= Hash::make($request->password);
      $user->user_type= 1;
      $user->save();
      return redirect('admin/admin/lista')->with('success', "Adicionado com sucesso");
    }
   

    public function edit($id){
        
        $data['getRecord'] = User::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'editar admin ';
            return view('admin.admin.edit', $data);
        }else{
            abort(404);
        }





    }

    public function update(Request $request, $id){
        request()->validate([
            'email' => 'required|email|unique:users,email,'.$id
         ]);
        $user =  User::getSingle($id);
        $user->name= trim($request->name);
        $user->email= trim($request->email);
        if (!empty($request->password)) {
            $user->password= Hash::make($request->password);
        }
        $user->save();
        return redirect('admin/admin/lista')->with('success', "Atualizado com sucesso");
    }
    public function delete($id){
        $user =  User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('admin/admin/lista')->with('success', "Apagado com sucesso");
    }
}
