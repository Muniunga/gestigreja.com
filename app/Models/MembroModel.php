<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
class MembroModel extends Model
{
    use HasFactory;
    protected  $table = 'membro';

    static public function getRecord()
    {
        $return = self::select('membro.*','paroquia.name as paroquia', 'genero.descricao as genero','endereco.Municipio as endereco')
        ->where('membro.estado','=', 1)
        ->join('paroquia', 'paroquia.id', 'membro.paroquia')
        ->join('genero', 'genero.id', 'membro.genero')
        ->join('endereco', 'endereco.id', 'membro.endereco');
       
        
        if(!empty(Request::get('name'))){
            $return = $return->where('membro.name','like','%'.Request::get('name').'%');
        }
        if(!empty(Request::get('idade'))){
            $return = $return->where('idade','like','%'.Request::get('idade').'%');
        }
        if(!empty(Request::get('paroquia'))){
            $return = $return->where('paroquia.name','like','%'.Request::get('paroquia').'%');
        }
      
        $return = $return->orderBy('id', 'desc')

        
       -> orderBy('id', 'desc')
       
        ->paginate(20);


        return $return;
    }
    static public function getMembro()
    {
        $return = self::select('membro.*')
       
       -> orderBy('id', 'desc')
        ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }
  
    
}
