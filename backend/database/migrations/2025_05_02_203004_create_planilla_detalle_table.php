<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_detalle', function (Blueprint $table) {
            $table->unsignedBigInteger('idplanilla');
            $table->unsignedBigInteger('idempleado');
            $table->timestamps();
     //       $table->primary(['idplanilla', 'idempleado']);
     //       $table->foreign('idplanilla')->references('idplanilla')->on('planilla');
     //       $table->foreign('idempleado')->references('idempleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planilla_detalle');
    }
}
