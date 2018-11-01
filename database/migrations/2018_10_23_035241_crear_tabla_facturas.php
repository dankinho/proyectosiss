<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id_facturas');
            $table->integer('id_clientes')->unsigned();
            $table->integer('id_talonarios')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->integer('n_factura');
            $table->integer('codigo_control');
            $table->timestamp('fecha_factura');
            $table->string('estado_pago',100);
            $table->integer('porcentaje_descuentos');
            $table->decimal('importe_total', 10, 2);
            $table->decimal('importe_no_credits', 10, 2);
            $table->string('url_codigo_qr',250);
            $table->timestamp('tx_fecha');
            $table->integer('tx_id');
            $table->string('tx_host',100);
            $table->foreign('id_clientes')->references('id_clientes')->on('clientes');
            $table->foreign('id_talonarios')->references('id_talonarios')->on('talonarios');
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
