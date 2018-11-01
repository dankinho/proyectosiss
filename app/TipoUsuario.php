<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{

    protected $table="tipo_usuarios";
    protected $primaryKey="id_tipo_usuario";
    public $timestamps=false;

}
