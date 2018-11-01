<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaMensaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id_mensajes');
            $table->unsignedInteger('id_clientes');
            $table->unsignedInteger('id_servicio_mascota');
            $table->timestamp('fecha_hora');
            $table->text('mensaje');
            $table->string('url_imagen',250);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host', 100);
            $table->foreign('id_clientes')->references('id_clientes')->on('clientes');
            $table->foreign('id_servicio_mascota')->references('id_servicio_mascota')->on('servicio_mascota');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensaje');
    }
}
