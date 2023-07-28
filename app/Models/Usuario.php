<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function getUsuario(){
        return 'Get Usuario';
    }

    public static function listaUsuarios(){
        return "List de usuários";
    }
}
