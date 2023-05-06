<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParoquiaModel extends Model
{
    use HasFactory;
    protected  $table = 'paroquia';

    static public function getRecord()
    {
        $return = self::select('paroquia.*')
        ->where('estado','=',1)

            ->orderBy('id', 'desc')
            ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }
}
