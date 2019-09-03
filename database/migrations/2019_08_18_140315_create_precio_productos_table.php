<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrecioProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precio_productos', function (Blueprint $table) {
            $table->string('id_precio')->unique()->nullable(false)->primary();
            $table->float('precio')->nullable(false)->unsigned();
            $table->string('id_producto_precio');
            $table->foreign('id_producto_precio')->references('id_prod')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('precio_productos');
    }
}
