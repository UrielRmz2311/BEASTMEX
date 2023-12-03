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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('no_serie');
            $table->string('marca');
            $table->integer('cantidad');
            $table->decimal('costo_compra', 8, 2);
            $table->decimal('precio_venta', 8, 2);
            $table->date('fecha_ingreso');
            $table->string('foto_producto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
