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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->string('telefono',10)->nullable();
            $table->string('correo',100)->unique();
            $table->string('direccion',255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contraseña',250);
            $table->boolean('estado')->default(true);
            $table->string('image',100)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
