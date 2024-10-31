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
        Schema::create('cashs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code')->unique();
            $table->dateTime('date_register');
            $table->decimal('total_value', 10, 2);
            $table->integer('type_transation'); // entrada ou saída
            $table->integer('category'); // venda de produtos, venda de serviços, pagamentos contas, compra de insumos
            $table->integer('payment_method'); // pix, cartão, especie, transferência, cortesia
            $table->string('description')->nullable();
            $table->json('data_info')->nullable(); // cliente, fornecedor, produtos, servios
            $table->foreignId('enterprise_id')->constrained('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashs');
    }
};
