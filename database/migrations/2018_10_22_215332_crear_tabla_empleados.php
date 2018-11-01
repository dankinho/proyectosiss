<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id_empleado');
            $table->integer('id_usuarios')->unsigned();
            $table->string('nombre_empleado',100);
            $table->string('apellido_empleado',100);
            $table->string('doc_identificacion',100);
            $table->string('rol_empleado',100);
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
        Schema::dropIfExists('empleados');
    }
}
