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
        Schema::create('consultadeticketdeventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket');
            $table->unsignedBigInteger('totaldecompra');
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('cantidad');

            $table->foreign('ticket')->references('id')->on('ticketdeventas');
            $table->foreign('totaldecompra')->references('id')->on('ticketdeventas');
            $table->foreign('cliente')->references('id')->on('usuarios');
            $table->foreign('cantidad')->references('id')->on('ticketdeventas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultadeticketdeventas');
    }
};
