<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillaDetalleIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_detalle_ingresos', function (Blueprint $table) {
            $table->unsignedBigInteger('idplanilla');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idcatalogoingreso');
            $table->unsignedBigInteger('iddetalleingreso');
            $table->decimal('monto');
            $table->timestamps();
         //   $table->primary(['idempleado', 'idplanilla']);
          //  $table->foreign(['idplanilla', 'idempleado'])
          //        ->references(['idplanilla', 'idempleado'])->on('planilla_detalle');
          //  $table->foreign(['idcatalogoingreso', 'iddetalleingreso'])
          //        ->references(['idcatalogo', 'iddetalle'])->on('catalogo_detalles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planilla_detalle_ingresos');
    }
}
