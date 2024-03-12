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
        Schema::create('mercado', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->string('marca');
            $table->date('data_validade');
            $table->string('fornecedor');
            $table->string('descricao');
            $table->string('codigo');
            $table->float('valor');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
