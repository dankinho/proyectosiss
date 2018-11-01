<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_servicios', function (Blueprint $table) {
            $table->increments('id_datos_servicio');
            $table->integer('cat_id_tipo_casa');
            $table->integer('cat_id_tipo_campo_exterior');
            $table->string ('direccion_calle', 100);
            $table->boolean('existencia_campo_exterior');
            $table->decimal('tamano_campo_exterior', 5, 2);
            $table->boolean('existencia_perro_casa');
            $table->integer('cant_perro_casa');
            $table->decimal('coor_longitud', 10, 10);
            $table->decimal('coor_latitud', 10, 10);
            $table->decimal('coor_altitud', 10, 10);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string ('tx_host', 100);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_servicios');
    }
}
