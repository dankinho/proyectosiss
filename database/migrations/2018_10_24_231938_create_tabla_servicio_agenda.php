<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaServicioAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_agenda', function (Blueprint $table) {
            $table->increments('id_servicio_agenda');
            $table->unsignedInteger('id_servicio');
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_final');
            $table->string('estado_servicio_agenda',100);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host', 100);
            $table->foreign('id_servicio')->references('id_servicios')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_agenda');
    }
}
