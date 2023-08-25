<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('consecutivo');
            $table->integer('siete')->nullable();
            $table->integer('diez')->nullable();
            $table->integer('quince')->nullable();;
            $table->string('calle');
            $table->string('numero');
            $table->string('cruce_uno')->nullable();
            $table->string('cruce_dos')->nullable();
            $table->string('nombre_cliente')->nullable();
            $table->string('giro');
            $table->string('telefono')->nullable();
            $table->string('url')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
