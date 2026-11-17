<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comportamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('crianca_id')->constrained('criancas')->cascadeOnDelete();
            $table->unsignedSmallInteger('ano');
            $table->boolean('bonzinho');
            $table->foreignId('avaliado_por')->constrained('users')->restrictOnDelete();
            $table->text('observacao')->nullable();
            $table->timestamps();

            // Uma avaliação por criança por ano
            $table->unique(['crianca_id', 'ano']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comportamentos');
    }
};
