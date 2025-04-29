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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique()->primary();
            $table->string('ticket_token')->unique();
            $table->string('nombre_cliente');
            $table->string('telefono_cliente');
            $table->string('correo_cliente');
            $table->string('ticket_descripcion')->default('pendiente');
            $table->string('confirmacion_de_pago')->default('pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
