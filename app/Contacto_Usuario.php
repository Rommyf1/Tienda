<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto_Usuario extends Model
{
    protected $table = 'contacto_usuarios';

    protected $fillable = ['email','telefono'];

    public function usuario(){
    	return $this->belongsTo('App\Usuario','id_usuario_contacto','id_cl');
    }
}
