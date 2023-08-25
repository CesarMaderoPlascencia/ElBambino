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
        Schema::create('incidencias_clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->integer('consecutivo');
            $table->integer('siete')->nullable();
            $table->integer('diez')->nullable();
            $table->integer('quince')->nullable();
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
            $table->string('incidencia');
            $table->unsignedBigInteger('fecha_incidencia');
            $table->unsignedBigInteger('id_vendedor');
            $table->unsignedBigInteger('id_ruta');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_vendedor')->references('id')->on('users');
            $table->foreign('id_ruta')->references('id')->on('rutas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias_clientes');
    }
};
