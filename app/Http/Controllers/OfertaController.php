<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\OfertaModel;
use App\Models\ParoquiaModel;

class OfertaController extends Controller
{
    
    public function lista()
    {
        $data['getRecord'] = OfertaModel::getRecord();
        $data['header_title']= "oferta";
        return view('admin.oferta.lista', $data);
    }
    public function add()
    {
        $data['getParoquia']= ParoquiaModel::getRecord();
        $data['header_title']= "Adicionar oferta";
        return view('admin.oferta.add', $data);
    }

    public function insert (Request $request){
        // dd($request->all());
        
         $save = new OfertaModel;
         $save->valor= $request->valor;
         $save->descricao= $request->descricao;
         $save->paroquia= $request->paroquia;
         $save->data= $request->data;
        
        
        
         $save->save();
         return redirect('admin/oferta/lista')->with('success', "oferta Adicionada com sucesso");
       }

       public function edit($id){
        $data['getParoquia']= ParoquiaModel::getRecord();
        $data['getRecord'] = OfertaModel::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'editar oferta ';
            return view('admin.oferta.edit', $data);
        }else{
            abort(404);
        }

    }

    public function update($id, Request $request){
        $save= OfertaModel::getSingle($id);
      
        $save = new OfertaModel;
        $save->valor= $request->valor;
        $save->descricao= $request->descricao;
        $save->paroquia= $request->paroquia;
        $save->data= $request->data;
        return redirect('admin/oferta/lista')->with('success', "oferta Atualizado com sucesso");
    }
    public function delete($id){
        $save =  OfertaModel::getSingle($id);
        $save->estado = 2;
        $save->save();
        return redirect('admin/oferta/lista')->with('success', "oferta Apagada com sucesso");
    }
}
