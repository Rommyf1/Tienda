<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';

    protected $fillable = ['stock'];

    public function producto(){
    	return $this->belongsTo('App\Producto','id_producto_stock','id_prod');
    }
}
