<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuarios');
            $table->unsignedInteger('id_tipo_usuario');
            $table->string('nombre')->nullable();
            $table->string("nombre_usuario")->nullable();
            $table->string('correo')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('tx_fecha')->nullable();
            $table->integer('tx_id')->nullable();
            $table->string('tx_host', 100)->nullable();
            $table->foreign('id_tipo_usuario')->references('id_tipo_usuario')->on('tipo_usuarios');
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
