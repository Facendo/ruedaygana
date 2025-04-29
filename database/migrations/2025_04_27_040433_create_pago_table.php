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
        Schema::create('pago', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string('referencia')->unique();
            $table->double('monto');
            $table->date('fecha_pago');
            $table->string('metodo_de_pago');
            $table->string('estado_pago')->default('pendiente');
            $table->string("dir_imagen_comprobante")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
