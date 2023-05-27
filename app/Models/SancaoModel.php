<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SancaoModel extends Model
{
    use HasFactory;
    protected  $table = 'sancao';

    static public function getRecord()
    {
        $return = self::select('sancao.*','membro.name as membro', 'motivo.descricao as motivo')
        ->join('membro', 'membro.id', 'sancao.membro')
        ->join('motivo', 'motivo.id', 'sancao.motivo')
       -> orderBy('id', 'desc')
        ->paginate(20);

        return $return;
    }
    static public function getSingle($id){
        return self::find($id);
    }
}