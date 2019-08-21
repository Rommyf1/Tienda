<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    public function avatar(){
    	return $this->hasOne('App\Avatar_Usuario','avatar_id','id_avatar');
    }
}
