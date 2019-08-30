<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['nombre_cl','apellido_cl'];

    public function avatar(){
    	return $this->hasOne('App\Avatar_Usuario','avatar_id','id_avatar');
    }
}
