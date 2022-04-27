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
        Schema::create('producto__compras', function (Blueprint $table) {
            $table->id();

            $table->foreignId('producto_id')
            ->nullable()
            ->constrained('productos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('compra_id')
            ->nullable()
            ->constrained('compras')
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto__compras');
    }
};
