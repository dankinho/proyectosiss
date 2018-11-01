<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCancelacionServicioMascota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelacion_servicio_mascota', function (Blueprint $table) {
            $table->increments('id_cancelacion');
            $table->unsignedInteger('id_servicio_mascota');
            $table->unsignedInteger('id_estado');
            $table->timestamp('fecha_cancelacion');
            $table->text('justificacion');
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host', 100);
            $table->foreign('id_servicio_mascota')->references('id_servicio_mascota')->on('servicio_mascota');
            $table->foreign('id_estado')->references('id_estado')->on('estado_opciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancelacion_servicio_mascota');
    }
}
