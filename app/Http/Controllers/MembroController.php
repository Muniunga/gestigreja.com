<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\MembroModel;

use App\Models\EnderecoModel;
use App\Models\ParoquiaModel;
class MembroController extends Controller
{
     public function lista()
    {
        $data['getRecord'] = MembroModel::getRecord();
        $data['header_title']= "Membros";
        return view('admin.membro.lista', $data);
    }
    public function add()
    {
    
        $data['getEndereco']= EnderecoModel::getRecord();
        $data['getParoquia']= ParoquiaModel::getRecord();
       
        $data['header_title']= "Adicionar Membros";
        return view('admin.membro.add', $data);
    }

    public function detalhe($id) 
    {
        $data['getRecord'] = MembroModel::getRecord();
        $data['getEndereco']= EnderecoModel::getRecord();
        $data['getParoquia']= ParoquiaModel::getRecord();
        $data['getSingle'] = MembroModel::getSingle($id);
        $data['header_title']= "Detalhe Membro";
        return view('admin.membro.detalhe', $data);
    }

    public function insert (Request $request){
        // dd($request->all());
        
         $save = new MembroModel;
         $save->name= $request->name;
         $save->endereco= $request->endereco;
         $save->telefone= $request->telefone;
         $save->paroquia= $request->paroquia;
         $save->idade= $request->idade;
         $save->genero= $request->genero;
        
        
        
         $save->save();
         return redirect('admin/membro/lista')->with('success', "Membros Adicionado com sucesso");
       }

       public function edit($id){
        
        $data['getRecord'] = MembroModel::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'editar membro ';
            return view('admin.membro.edit', $data);
        }else{
            abort(404);
        }

    }

    public function update($id, Request $request){
        $save= MembroModel::getSingle($id);
        $save->name= $request->name;
        $save->endereco= $request->endereco;
        $save->telefone= $request->telefone;
        $save->paroquia= $request->paroquia;
        $save->idade= $request->idade;
        $save->genero= $request->genero;
        $save->save();
        return redirect('admin/membro/lista')->with('success', "membro Atualizado com sucesso");
    }
    public function delete($id){
        $save =  MembroModel::getSingle($id);
        $save->estado = 2;
        $save->save();
        return redirect('admin/membro/lista')->with('success', "membro Apagado com sucesso");
    }
}
