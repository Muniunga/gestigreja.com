<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SancaoModel;
use App\Models\MembroModel;
use App\Models\MotivoModel;

class SancaoController extends Controller
{
    public function lista()
    {
        $data['getRecord'] = SancaoModel::getRecord();
        $data['header_title']= "sancao";
        return view('admin.sancao.lista', $data);
    }
    public function add()
    {
       $data['getMembro']= MembroModel::getMembro();
       $data['getMotivo']= MotivoModel::getRecord();
        $data['header_title']= "Adicionar sancao";
        return view('admin.sancao.add', $data);
    }

    public function insert (Request $request){
        // dd($request->all());
        
         $save = new SancaoModel;
         $save->descricao= $request->descricao;
         $save->membro= $request->membro;
         $save->motivo= $request->motivo;
         $save->dataInicio= $request->dataInicio;
         $save->dataFim= $request->dataFim;
        
        
        
         $save->save();
         return redirect('admin/sancao/lista')->with('error', "sancao Adicionado com sucesso");
       }

       public function edit($id){
        
           $data['getRecord'] = SancaoModel::getSingle($id);
           $data['getMembro']= MembroModel::getMembro();
           $data['getMotivo']= MotivoModel::getRecord();
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'editar sancao ';
            return view('admin.sancao.edit', $data);
        }else{
            abort(404);
        }

    }

    public function update($id, Request $request){
        $save= SancaoModel::getSingle($id);
             
        $save->descricao= $request->descricao;
        $save->membro= $request->membro;
        $save->motivo= $request->motivo;
        $save->dataInicio= $request->dataInicio;
        $save->dataFim= $request->dataFim;

        return redirect('admin/sancao/lista')->with('error', "sancao Atualizado com sucesso");
    }
    public function delete($id){
        $save =  SancaoModel::getSingle($id);
        $save->estado = 2;
        $save->save();
        return redirect('admin/sancao/lista')->with('error', "sancao Apagada com sucesso");
    }
    public function detalhe()
    {
        $data['getRecord'] = SancaoModel::getRecord();
        $data['header_title']= "Detalhe Membro";
        return view('admin.sancao.detalhe', $data);
    }
}
