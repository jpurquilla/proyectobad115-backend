<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_empleado', function (Blueprint $table) {
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('correlativo');
            $table->unsignedBigInteger('idcatalogotipo');
            $table->unsignedBigInteger('idtipodocumento');
            $table->string('numero_documento', 20)->nullable();
            $table->timestamps();

     //       $table->primary(['idempleado', 'correlativo']);

     //       $table->foreign(['idempleado'])->references('idempleado')->on('empleados');
     //       $table->foreign(['idcatalogotipo', 'idtipodocumento'])
     //             ->references(['idcatalogo', 'iddetalle'])->on('catalogo_detalles');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_empleado');
    }
}
