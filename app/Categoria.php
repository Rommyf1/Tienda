<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['categoria'];

    public function producto(){
    	return $this->belongsTo('App\Producto','id_producto_categoria','id_prod');
    }
}
