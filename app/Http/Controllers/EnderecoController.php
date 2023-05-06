<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\EnderecoModel;

class EnderecoController extends Controller
{
    public function lista()
    {
        $data['getRecord'] = EnderecoModel::getRecord();
        $data['header_title']= "Enderecos";
        return view('admin.endereco.lista', $data);
    }

    public function add(){

        $data['header_title'] = 'add novo Endereco ';
        return view('admin.endereco.add', $data);
    }

    public function insert (Request $request){
        // dd($request->all());
        
         $save = new EnderecoModel;
         $save->provincia= $request->provincia;
         $save->municipio= $request->municipio;
         $save->casa= $request->casa;
        
         $save->save();
         return redirect('admin/endereco/lista')->with('error', "Endereco Adicionado com sucesso");
       }

       public function edit($id){
        
        $data['getRecord'] = EnderecoModel::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'editar endereço ';
            return view('admin.endereco.edit', $data);
        }else{
            abort(404);
        }

    }

    public function update($id, Request $request){
        $save= EnderecoModel::getSingle($id);
        $save->provincia= $request->provincia;
        $save->municipio= $request->municipio;
        $save->casa= $request->casa;
        $save->save();

        return redirect('admin/endereco/lista')->with('error', "Endereco Atualizado com sucesso");
    }
    public function delete($id){
        $save =  EnderecoModel::getSingle($id);
        $save->estado = 2;
        $save->save();
        return redirect('admin/endereco/lista')->with('error', "Apagado com sucesso");
    }
}
