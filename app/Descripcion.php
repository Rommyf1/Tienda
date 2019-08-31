<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    protected $table = 'descripciones';

    protected $fillable = ['descripcion'];

    public function producto(){
    	return $this->belongsTo('App\Producto','id_producto_decripcion','id_prod');
    }
}
