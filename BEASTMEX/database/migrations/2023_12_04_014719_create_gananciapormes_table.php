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
        Schema::create('gananciapormes', function (Blueprint $table) {
            $table->id();
            $table->decimal('venta_generada', 8, 2);
            $table->decimal('ganancia', 8, 2);
            $table->string('calculo_venta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gananciapormes');
    }
};
