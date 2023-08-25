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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('carga_siete');
            $table->integer('carga_diez');
            $table->integer('carga_quince');
            $table->integer('descarga_siete');
            $table->integer('descarga_diez');
            $table->integer('descarga_quince');
            $table->integer('baja_siete');
            $table->integer('baja_diez');
            $table->integer('baja_quince');
            $table->integer('alta_siete');
            $table->integer('alta_diez');
            $table->integer('alta_quince');
            $table->integer('chilaquil_siete');
            $table->integer('chilaquil_diez');
            $table->integer('chilaquil_quince');
            $table->integer('extra_siete');
            $table->integer('extra_diez');
            $table->integer('extra_quince');
            $table->integer('extra_dinero');
            $table->integer('rebaja_dinero');
            $table->integer('venta');
            $table->integer('comentarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
