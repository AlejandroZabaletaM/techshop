<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venta_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->date('fecha_registro')->nullable();
            $table->integer('productos_registrados')->nullable();
            $table->integer('productos_ofertados')->nullable();
            $table->integer('productos_comprados')->nullable();
            $table->integer('productos_consignados')->nullable();
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
        Schema::dropIfExists('historials');
    }
};
