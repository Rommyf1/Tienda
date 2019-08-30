<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguridadUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguridad_usuarios', function (Blueprint $table) {
            $table->string('id_seguridad')->unique()->primary()->nullable(false);
            $table->string('contrasena')->nullable(false);
            $table->string('shalt')->nullable(false)->unique();
            $table->boolean('persistencia')->default(false);
            $table->foreign('id_usuario_seguridad')->references('id_cl')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('seguridad_usuarios');
    }
}
