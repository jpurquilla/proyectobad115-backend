<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id('iddescuento'); // BIGSERIAL (auto-incrementado)
            $table->string('descripcion', 100)->notNullable();
            $table->decimal('porcentaje', 5, 2)->notNullable();
            $table->decimal('monto_fijo', 10, 2)->nullable();
            $table->timestamps(); // created_at y updated_at con valores por defecto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descuentos');
    }
}
