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
        Schema::create('ticketdeventas', function (Blueprint $table) {
            $table->id();
            $table->date('fechaingreso');
            $table->string('nombrecliente');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->unsignedBigInteger('precio');
            $table->decimal('totaldecompra', 8, 2);

            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('precio')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticketdeventas');
    }
};
