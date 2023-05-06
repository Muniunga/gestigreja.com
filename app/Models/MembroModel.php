<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroModel extends Model
{
    use HasFactory;
    protected  $table = 'membro';

    static public function getRecord()
    {
        $return = self::select('membro.*')
        ->where('estado','=',1)

            ->orderBy('id', 'desc')
            ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }
}
