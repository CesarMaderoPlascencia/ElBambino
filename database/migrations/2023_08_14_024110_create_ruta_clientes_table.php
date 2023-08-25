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
        Schema::create('ruta_clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ruta');
            $table->unsignedBigInteger('id_cliente');
            $table->timestamps();

            $table->foreign('id_ruta')->references('id')->on('rutas');
            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruta_clientes');
    }
};
