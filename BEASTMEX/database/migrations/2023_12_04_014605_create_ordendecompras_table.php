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
        Schema::create('ordendecompras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('direccion_proveedor');
            $table->string('producto');
            $table->integer('cantidad')->default(1);
            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('direccion_proveedor')->references('id')->on('proveedores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordendecompras');
    }
};
