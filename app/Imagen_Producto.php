<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_Producto extends Model
{
    protected $table = 'imagenes_productos';

    protected $fillable = ['imagen','detalle'];

    public function producto(){
    	return $this->belongsTo('App\Producto','id_producto_imagen','id_prod');
    }
}
