<?php

namespace App\Http\Controllers;

use App\Models\DizimoModel;
use Illuminate\Http\Request;
use Auth;
use App\Models\MembroModel;


class DizimoController extends Controller
{
    public function lista()
    {
        $data['getRecord'] = DizimoModel::getRecord();
        $data['header_title']= "dizimo";
        return view('admin.dizimo.lista', $data);
    }
    public function add()
    {
        $data['getMembro']= MembroModel::getMembro();
        $data['header_title']= "Adicionar dizimo";
        return view('admin.dizimo.add', $data);
    }

    public function insert (Request $request){
        // dd($request->all());
        
         $save = new DizimoModel;
         $save->valor= $request->valor;
         $save->descricao= $request->descricao;
         $save->membro= $request->membro;
         $save->data= $request->data;
        
        
        
         $save->save();
         return redirect('admin/dizimo/lista')->with('success', "dizimo Adicionada com sucesso");
       }

       public function edit($id){
        
        $data['getRecord'] = DizimoModel::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'editar dizimo ';
            return view('admin.dizimo.edit', $data);
        }else{
            abort(404);
        }

    }

    public function update($id, Request $request){
        $save= DizimoModel::getSingle($id);
      
        $save = new DizimoModel;
        $save->valor= $request->valor;
        $save->descricao= $request->descricao;
        $save->membro= $request->membro;
        $save->data= $request->data;
        return redirect('admin/dizimo/lista')->with('success', "dizimo Atualizado com sucesso");
    }
    public function delete($id){
        $save =  DizimoModel::getSingle($id);
        $save->estado = 2;
        $save->save();
        return redirect('admin/dizimo/lista')->with('success', "dizimo Apagada com sucesso");
    }
}
