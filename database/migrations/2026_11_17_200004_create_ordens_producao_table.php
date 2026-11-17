<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ordens_producao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carta_id')->unique()->constrained('cartas')->cascadeOnDelete();
            $table->foreignId('duende_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('status')->default('na_fila'); // na_fila | fabricando | pronta
            $table->timestamp('concluida_em')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ordens_producao');
    }
};
