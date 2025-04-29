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
        Schema::create('sorteo', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique()->primary();
            $table->string('sorteo_nombre');
            $table->date('sorteo_fecha_inicio');
            $table->date('sorteo_fecha_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sorteo');
    }
};
