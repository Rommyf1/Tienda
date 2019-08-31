<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['nombre_cl','apellido_cl'];

    public function avatar(){
    	return $this->hasOne('App\Avatar_Usuario','id_usuario_avatar','id_cl');
    }

    public function contacto(){
    	return $this->hasOne('App\Contacto_Usuario','id_usuario_contacto','id_cl');
    }

    public function credenciales(){
    	return $this->hasOne('App\Seguridad_Usuario','id_usuario_seguridad','id_cl');
    }

    public function producto(){
    	return $this->hasMany('App\Producto','id_usuario_producto','id_cl');
    }
}
