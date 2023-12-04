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
        Schema::create('consultadeventas', function (Blueprint $table) {
            $table->id();
            $table->string('nombrepro');
            $table->string('ticket');
            $table->integer('cantidad');
            $table->decimal('totaldeventa', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultadeventas');
    }
};
