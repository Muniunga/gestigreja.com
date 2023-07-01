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

    static public function getGrafico(){
       $grafico= OfertaModel::orderBy('created_at', 'ASC');
       if( $grafico-> count() ){
        $total=[];
        foreach($grafico as $chave => $valor){
            $dadosTotal=json_decode($valor['valor'], true);
            foreach($dadosTotal as $chaveTotal => $valorTotal){
                $total[ $chaveTotal ]= $valorTotal;
            }
           
        }
        return $grafico;
       }else{
        return null;
       }
    }

}
