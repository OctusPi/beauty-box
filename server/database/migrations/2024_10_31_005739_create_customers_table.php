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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('cpf', 20)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('mail')->nullable();
            $table->string('address')->nullable();
            $table->json('history')->nullable();
            $table->foreignId('enterprise_id')->constrained('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
