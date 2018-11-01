<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDatosTalonario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talonarios', function (Blueprint $table) {
            $table->increments('id_talonarios');
            $table->integer('id_empresa')->unsigned();
            $table->integer('dosificacion');
            $table->integer('n_autorizacion');
            $table->string('leyenda', 250);
            $table->date('fecha_limite_emision');
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talonarios');
    }
}
