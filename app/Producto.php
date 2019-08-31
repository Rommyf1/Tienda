<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['nombre_prod'];

    public function precio(){
    	return $this->hasOne('App\Precio_Producto','id_producto_precio','id_prod');
    }

    public function stock(){
    	return $this->hasOne('App\Stock','id_producto_stock','id_prod');
    }

    public function descripcion(){
    	return $this->hasOne('App\Descripcion','id_producto_descripcion','id_prod');
    }

    public function categoria(){
    	return $this->hasOne('App\Categoria','id_producto_categoria','id_prod');
    }

    public function imagen(){
    	return $this->hasMany('App\Imagen_Producto','id_producto_imagen','id_prod');
    }

    public function comentarios(){
    	return $this->hasMany('App\Comentario','id_producto_comentario','id_prod');
    }

    public function usuario(){
    	return $this->belongsTo('App\Usuario','id_usuario_producto','id_cl');
    }
}
