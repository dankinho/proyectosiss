<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_clientes');
            $table->integer('id_usuarios')->unsigned();
            $table->string('nombre_cliente',100);
            $table->string('apellido_cliente',100);
            $table->string('cat_id_tipo_identidad',100);
            $table->string('num_doc_identidad',100);
            $table->string('genero_cliente',100);
            $table->string('direccion_casa',100);
            $table->string('direccion_numero_casa',100);
            $table->boolean('estado_usuario');
            $table->integer('cat_macrodistrito');
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
