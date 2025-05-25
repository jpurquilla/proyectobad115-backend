<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compania', function (Blueprint $table) {
            $table->id('idcompania');
            $table->string('nombre', 40);
            $table->string('direccion', 100)->nullable();
            $table->string('nit', 17)->nullable();
            $table->string('nic', 25)->nullable();
            $table->string('telefono', 8)->nullable();
            $table->string('sitioweb', 50)->nullable();
            $table->string('representante_legal', 80)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compania');
    }
}
