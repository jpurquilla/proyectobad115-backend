<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email', function (Blueprint $table) {
            $table->id('idcorreo');
            $table->unsignedBigInteger('idempleado');
            $table->unsignedBigInteger('idcatalogtipocorreo');
            $table->unsignedBigInteger('iddetalletipocorreo');
            $table->string('email', 40)->nullable();
            $table->timestamps();
     //       $table->foreign('idempleado')->references('idempleado')->on('empleados');
     //       $table->foreign(['idcatalogtipocorreo', 'iddetalletipocorreo'])
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
        Schema::dropIfExists('email');
    }
}
