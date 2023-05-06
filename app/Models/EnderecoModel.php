<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoModel extends Model
{
    use HasFactory;
    protected  $table = 'endereco';

    static public function getRecord()
    {
        $return = self::select('endereco.*')

            ->orderBy('idEndereco', 'desc')
            ->paginate(20);

        return $return;
    }
    static public function getSingle($idEndereco){
        return self::find($idEndereco);
    }
}
