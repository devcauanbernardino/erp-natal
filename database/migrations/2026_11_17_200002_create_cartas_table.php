<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crianca_id')->constrained('criancas')->cascadeOnDelete();
            $table->string('brinquedo');
            $table->unsignedSmallInteger('ano');
            $table->string('status')->default('recebida'); // recebida | em_analise | aprovada | recusada
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cartas');
    }
};
