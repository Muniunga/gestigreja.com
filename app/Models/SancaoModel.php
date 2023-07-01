<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class SancaoModel extends Model
{
    use HasFactory;
    protected  $table = 'sancao';

    static public function getRecord()
    {
        $return = self::select('sancao.*','membro.name as membro', 'motivo.descricao as motivo')
        ->where('sancao.estado','=', 1)
        ->join('membro', 'membro.id', 'sancao.membro')
        ->join('motivo', 'motivo.id', 'sancao.motivo');
        if(!empty(Request::get('name'))){
            $return = $return->where('name','like','%'.Request::get('name').'%');
        }
        if(!empty(Request::get('motivo'))){
            $return = $return->where('motivo.descricao','like','%'.Request::get('motivo').'%');
        }
        if(!empty(Request::get('dataInicio'))){
            $return = $return->whereDate('dataInicio','=',Request::get('dataInicio'));
        }
      
        $return = $return->orderBy('id', 'desc')
        ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }
}