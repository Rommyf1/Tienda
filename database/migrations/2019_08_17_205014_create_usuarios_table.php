<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id_cl')->unique()->primary()->nullable(false);
            $table->string('nombre_cl',60)->nullable(false);
            $table->string('apellido_cl',60)->nullable(false);
            $table->string('contacto_id');
            $table->foreign('contacto_id')->references('id_contacto')->on('contacto_usuarios');
            $table->string('seguridad_id');
            $table->foreign('seguridad_id')->references('id_seguridad')->on('seguridad_usuarios');
            $table->string('avatar_id');
            $table->foreign('avatar_id')->references('id_avatar')->on('avatar_usuarios');
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
        Schema::dropIfExists('usuarios');
    }
}
