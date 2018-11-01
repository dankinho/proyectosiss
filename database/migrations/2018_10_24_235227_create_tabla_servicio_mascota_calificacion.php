<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaServicioMascotaCalificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_mascota_calificacion', function (Blueprint $table) {
            $table->increments('id_servicio_mascota_calificacion');
            $table->unsignedInteger('id_servicio_mascota');
            $table->unsignedInteger('id_estado');
            $table->string('tipo_calificacion',100);
            $table->integer('calificacion_estrellas');
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
        Schema::dropIfExists('servicio_mascota_calificacion');
    }
}
