<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->string('id_prod')->unique()->nullable(false)->primary();
            $table->string('nombre_prod')->nullable(false);
            $table->string('cat_id');
            $table->foreign('cat_id')->references('id_cat')->on('categorias');
            $table->string('precio_id');
            $table->foreign('precio_id')->references('id_precio')->on('precio_productos');
            $table->string('stock_id');
            $table->foreign('stock_id')->references('id_stock')->on('stocks');
            $table->string('detalle_id');
            $table->foreign('detalle_id')->references('id_detalle')->on('descripciones');
            $table->string('usuario_id');
            $table->foreign('usuario_id')->references('id_cl')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
