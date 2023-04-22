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

    public function edit($id){
        $data['getRecord'] = User::getSingle($id);
        if (!empty($data['geRecord'])) {

            $data['header_title'] = 'editar admin ';
            return view('admin.admin.edit', $data);

        }else{
            abort(404);
        }

    }

    public function update(Request $request, $id){

        $user =  User::getSingle($id);
        $user->name= trim($request->name);
        $user->email= trim($request->email);
        if (!empty($reques->password)) {
            $user->password= Hash::make($request->password);
        }
        $user->save();
        return redirect('admin/admin/lista')->with('error', "Atualizado com sucesso");
    }
    public function delete($id){
        $user =  User::getSingle($id);
        $user->is_delete = 1;
        $user->save();
        return redirect('admin/admin/lista')->with('error', "Apagado com sucesso");
    }
}
