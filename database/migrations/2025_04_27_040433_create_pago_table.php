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
            $table->integer('id_pago')->autoIncrement()->primary();
            $table->string('cedula_cliente');
            $table->string('referencia')->unique();
            $table->double('monto');
            $table->string('descripcion');
            $table->date('fecha_pago');
            $table->string('metodo_de_pago');
            $table->string('estado_pago')->default('pendiente');
            $table->string("dir_imagen_comprobante")->nullable();
        
           $table->foreign('cedula_cliente')
                ->references('cedula')
                ->on('cliente')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
