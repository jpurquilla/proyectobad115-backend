<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillaDetalleDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_detalle_descuentos', function (Blueprint $table) {
            $table->unsignedBigInteger('idplanilla');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('iddescuento');
            $table->decimal('monto');
            $table->timestamps();
         //   $table->primary(['idplanilla', 'iddescuento']);
         //   $table->foreign(['idplanilla', 'idempleado'])
         //         ->references(['idplanilla', 'idempleado'])->on('planilla_detalle');
          //  $table->foreign('iddescuento')->references('iddescuento')->on('tipodescuento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planilla_detalle_descuentos');
    }
}
