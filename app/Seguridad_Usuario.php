<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguridad_Usuario extends Model
{
    protected $table = 'seguridad_usuarios';

    protected $hidden = [
    	'contrasena','id_seguridad','persistencia',
    ];
}
