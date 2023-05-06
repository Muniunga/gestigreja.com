<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ParoquiaModel;

class ParoquiaController extends Controller
{
  
    public function lista()
    {
        $data['getRecord'] = ParoquiaModel::getRecord();
        $data['header_title']= "Paroquias";
        return view('admin.paroquia.lista', $data);
    }
    public function add()
    {
       
        $data['header_title']= "Adicionar Paroquias";
        return view('admin.paroquia.add', $data);
    }

    public function insert (Request $request){
        // dd($request->all());
        
         $save = new ParoquiaModel;
         $save->name= $request->name;
         $save->endereco= $request->endereco;
        
        
        
         $save->save();
         return redirect('admin/paroquia/lista')->with('error', "Paroquia Adicionado com sucesso");
       }

       public function edit($id){
        
        $data['getRecord'] = ParoquiaModel::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'editar paroquia ';
            return view('admin.paroquia.edit', $data);
        }else{
            abort(404);
        }

    }

    public function update($id, Request $request){
        $save= ParoquiaModel::getSingle($id);
        $save->name= $request->name;
        $save->endereco= $request->endereco;
        $save->save();

        return redirect('admin/paroquia/lista')->with('error', "paroquia Atualizado com sucesso");
    }
    public function delete($id){
        $save =  ParoquiaModel::getSingle($id);
        $save->estado = 2;
        $save->save();
        return redirect('admin/paroquia/lista')->with('error', "paroquia Apagada com sucesso");
    }
}
