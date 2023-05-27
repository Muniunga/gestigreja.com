<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotivoModel extends Model
{
        use HasFactory;
    protected  $table = 'motivo';

    static public function getRecord()
    {
        $return = self::select('motivo.*')
       
       -> orderBy('id', 'desc')
        ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }
}
