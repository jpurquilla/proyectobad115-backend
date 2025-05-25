<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto', function (Blueprint $table) {
            $table->id('idpuesto');
            $table->unsignedBigInteger('idestructura');
            $table->string('descripcion', 25)->nullable();
            $table->decimal('salarioinferior')->nullable();
            $table->decimal('salariosuperior')->nullable();
            $table->unsignedBigInteger('idcompania');
            $table->timestamps();
        //    $table->foreign('idestructura')->references('idestructura')->on('estructura_organizativa');
        //    $table->foreign('idcompania')->references('idcompania')->on('companias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puesto');
    }
}
