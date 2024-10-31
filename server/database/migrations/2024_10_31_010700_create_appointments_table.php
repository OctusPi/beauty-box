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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('custumer_id')->constrained('custumers');
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('enterprise_id')->constrained('enterprises');
            $table->dateTime('date_hour_start');
            $table->dateTime('date_hour_end');
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
