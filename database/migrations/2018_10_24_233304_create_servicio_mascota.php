<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioMascota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_mascota', function (Blueprint $table) {
            $table->increments('id_servicio_mascota');
            $table->unsignedInteger('id_servicio');
            $table->unsignedInteger('id_mascota');
            $table->unsignedInteger('estado_servicio_mascota_id_estado');
            $table->integer('cat_id_tipo_servicio');
            $table->timestamp('fecha_servicio_inicio');
            $table->timestamp('fecha_servicio_final');
            $table->decimal('precio_servicio_mascota');
            $table->decimal('porcentaje_comision');
            $table->string('url_imagen_servicio_mascota');
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host', 100);
            $table->foreign('id_servicio')->references('id_servicios')->on('servicios');
            $table->foreign('id_mascota')->references('id_mascotas')->on('mascotas');
            $table->foreign('estado_servicio_mascota_id_estado')->references('id_estado')->on('estado_servicio_mascota');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_mascota');
    }
}
