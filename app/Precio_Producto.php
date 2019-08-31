<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio_Producto extends Model
{
    protected $table = 'precio_producto';

    protected $fillable = ['precio'];

    public function producto(){
    	return $this->belongsTo('App\Producto','id_producto_precio','id_prod');
    }
}
