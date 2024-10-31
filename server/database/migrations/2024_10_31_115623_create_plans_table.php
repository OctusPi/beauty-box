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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('type'); //free,standart,professional
            $table->integer('frequency_payment'); // mensal, anual, lifetime
            $table->dateTime('last_payment'); // mensal, anual, lifetime
            $table->boolean('status_payment'); // em dia, atrasado
            $table->integer('status'); // ativo, bloqueado, suspenso, cancelado
            $table->foreignId('enterprise_id')->constrained('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
