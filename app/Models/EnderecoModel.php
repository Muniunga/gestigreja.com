<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class EnderecoModel extends Model
{
    use HasFactory;
    protected  $table = 'endereco';

    static public function getRecord()
    {
        $return = self::select('endereco.*')
        ->where('estado','=',1);
        if(!empty(Request::get('provincia'))){
            $return = $return->where('provincia','like','%'.Request::get('provincia').'%');
        }
        
        if(!empty(Request::get('municipio'))){
            $return = $return->where('municipio','like','%'.Request::get('municipio').'%');
        }
      
        $return = $return->orderBy('id', 'desc')

            ->orderBy('id', 'desc')
            ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }
}
