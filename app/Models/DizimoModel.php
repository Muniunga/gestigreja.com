<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class DizimoModel extends Model
{
    use HasFactory;
    protected  $table = 'dizimo';

    static public function getRecord()
    {
        $return = self::select('dizimo.*','membro.name as membro')
        ->where('dizimo.estado','=', 1)
        ->join('membro', 'membro.id', 'dizimo.membro');
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
    
}
