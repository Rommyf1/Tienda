<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = ['comentario','fecha_comentario'];

    public function producto(){
    	return $this->belongsTo('App\Producto','id_producto_comentario','id_prod');
    }
}
