<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstadoServicioMascota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_servicio_mascota', function (Blueprint $table) {
            $table->increments('id_estado');
            $table->string('estado',100);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_servicio_mascota');
    }
}
