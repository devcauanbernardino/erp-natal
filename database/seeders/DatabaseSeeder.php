<?php

namespace Database\Seeders;

use App\Models\Carta;
use App\Models\Crianca;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Usuários fixos, um de cada perfil (senha de todos: "password")
        User::factory()->noel()->create([
            'name' => 'Papai Noel',
            'email' => 'noel@polonorte.com',
        ]);

        User::factory()->mamaeNoel()->create([
            'name' => 'Mamãe Noel',
            'email' => 'mamae@polonorte.com',
        ]);

        User::factory()->create([
            'name' => 'Duende Teste',
            'email' => 'duende@polonorte.com',
        ]);

        // Mais alguns duendes aleatórios
        User::factory(3)->create();

        // 20 crianças, cada uma com 1 ou 2 cartas
        Crianca::factory(20)->create()->each(function (Crianca $crianca) {
            Carta::factory(rand(1, 2))->for($crianca)->create();
        });
    }
}
