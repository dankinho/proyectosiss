<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id_mascotas');
            $table->integer('id_clientes')->unsigned();
            $table->string('nombre_mascota',100);
            $table->date('fecha_nacimiento');
            $table->string('genero',100);
            $table->integer('cat_raza');
            $table->integer('cat_tamano');
            $table->string('url_imagen_mascota',250);
            $table->string('observaciones',250);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_clientes')->references('id_clientes')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
