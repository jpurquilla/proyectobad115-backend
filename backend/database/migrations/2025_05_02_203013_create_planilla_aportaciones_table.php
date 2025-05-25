<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillaAportacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_aportaciones', function (Blueprint $table) {
            $table->unsignedBigInteger('idplanilla');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idaportacion');
            $table->decimal('monto');
            $table->timestamps();
 //           $table->primary(['idempleado', 'idplanilla', 'idaportacion']);
 //           $table->foreign(['idplanilla', 'idempleado'])
  //                ->references(['idplanilla', 'idempleado'])->on('planilla_detalle');
  //          $table->foreign('idaportacion')->references('idaportacion')->on('tipoaportaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planilla_aportaciones');
    }
}
