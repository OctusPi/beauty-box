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
        Schema::create('billing_plans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code');
            $table->dateTime('date_payment');
            $table->decimal('value_payment', 8, 2);
            $table->integer('method_payment'); //pix, cartão, transferencia, especie
            $table->foreignId('enterprise_id')->constrained('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_plans');
    }
};
