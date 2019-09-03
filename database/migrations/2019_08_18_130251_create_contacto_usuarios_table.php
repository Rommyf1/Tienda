<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_usuarios', function (Blueprint $table) {
            $table->string('id_contacto')->unique()->primary()->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('telefono',15)->unique()->nullable();
            $table->string('id_usuario_contacto');
            $table->foreign('id_usuario_contacto')->references('id_cl')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('contacto_usuarios');
    }
}
