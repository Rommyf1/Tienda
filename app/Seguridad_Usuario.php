<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguridad_Usuario extends Model
{
    protected $table = 'seguridad_usuarios';

    protected $hidden = [
    	'contrasena','id_seguridad','persistencia'
    ];

    public function usuario(){
    	return $this->belongsTo('App\Usuario','id_usuario_seguridad','id_cl');
    }
}
