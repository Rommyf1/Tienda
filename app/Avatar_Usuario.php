<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar_Usuario extends Model
{
	protected $table = 'avatar_usuarios';

	protected $fillable = ['avatar'];

	public function usuario(){
		return $this->belongsTo('App\Usuario','id_usuario_avatar','id_cl');
	}
}
