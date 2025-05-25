<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_detalle', function (Blueprint $table) {
            $table->unsignedBigInteger('idcatalogo');
            $table->unsignedBigInteger('iddetalle');
            $table->string('descripcion', 25)->nullable();
            $table->timestamps();
            
         //   $table->primary(['idcatalogo', 'iddetalle']);
          //  $table->foreign('idcatalogo')->references('idcatalogo')->on('catalogos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogo_detalle');
    }
}
