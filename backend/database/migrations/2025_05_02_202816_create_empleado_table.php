<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id('idempleado');
            $table->string('primer_nombre', 20);
            $table->string('segundo_nombre', 20)->nullable();
            $table->string('primer_apellido', 20);
            $table->string('segundo_apellido', 20)->nullable();
            $table->string('apellido_casada', 20)->nullable();
            $table->unsignedBigInteger('idcatalogogenero');
            $table->unsignedBigInteger('iddetallegenero');
            $table->unsignedBigInteger('idcatalogoestadocivil');
            $table->unsignedBigInteger('iddetalleestadocivil');
            $table->timestamps();

       //     $table->foreign(['idcatalogogenero', 'iddetallegenero'])
       //     ->references(['idcatalogo', 'iddetalle'])
       //     ->on('catalogo_detalles');
       //     $table->foreign(['idcatalogoestadocivil', 'iddetalleestadocivil'])
       //     ->references(['idcatalogo', 'iddetalle'])
        //    ->on('catalogo_detalles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}
