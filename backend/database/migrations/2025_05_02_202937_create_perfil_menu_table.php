<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_menu', function (Blueprint $table) {
            $table->unsignedBigInteger('idperfil');
            $table->unsignedBigInteger('idmenu');
            $table->timestamps();
       //     $table->primary(['idperfil', 'idmenu']);
       //     $table->foreign('idperfil')->references('idperfil')->on('perfil');
       //     $table->foreign('idmenu')->references('idmenu')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_menu');
    }
}
