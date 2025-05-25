<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoPuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_puesto', function (Blueprint $table) {
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idpuesto');
            $table->decimal('salario')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->unsignedBigInteger('idempleadojefe');
            $table->integer('activo')->nullable();
            $table->timestamps();

    //        $table->primary(['idempleado', 'idpuesto']);
    //        $table->foreign('idpuesto')->references('idpuesto')->on('puesto');
    //        $table->foreign('idempleado')->references('idempleado')->on('empleados');
    //        $table->foreign('idempleadojefe')->references('idempleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_puesto');
    }
}
