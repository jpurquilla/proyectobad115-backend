<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstructuraOrganizativaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estructura_organizativa', function (Blueprint $table) {
            $table->id('idestructura');
            $table->string('descripcion', 25)->nullable();
            $table->unsignedBigInteger('idestructurasuperior');
            $table->unsignedBigInteger('idcompania');
            $table->timestamps();
    //        $table->foreign('idestructurasuperior')->references('idestructura')->on('estructura_organizativa');
    //        $table->foreign('idcompania')->references('idcompania')->on('companias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estructura_organizativa');
    }
}
