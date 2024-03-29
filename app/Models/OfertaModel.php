<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
class OfertaModel extends Model
{
    use HasFactory;
      protected  $table = 'oferta';

    static public function getRecord()
    {
        $return = self::select('oferta.*','paroquia.name as paroquia')
        ->where('oferta.estado','=', 1)
        ->join('paroquia', 'paroquia.id', 'oferta.paroquia');
        if(!empty(Request::get('name'))){
            $return = $return->where('name','like','%'.Request::get('name').'%');
        }

        if(!empty(Request::get('data'))){
            $return = $return->whereDate('data','=',Request::get('data'));
        }

        $return = $return->orderBy('id', 'desc')

       -> orderBy('id', 'desc')
        ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }

    public function getAllOfertas()
    {
        return $this->orderBy('data')->pluck('valor'); // Recupera os valores das ofertas ordenados por mês
    }

}
