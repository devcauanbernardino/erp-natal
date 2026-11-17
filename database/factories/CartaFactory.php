<?php

namespace Database\Factories;

use App\Models\Carta;
use App\Models\Crianca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Carta>
 */
class CartaFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Se ninguém informar a criança, a factory cria uma nova
            'crianca_id' => Crianca::factory(),
            'brinquedo' => fake()->randomElement([
                'Carrinho de madeira', 'Boneca de pano', 'Bicicleta', 'Trenzinho',
                'Bola de futebol', 'Quebra-cabeça', 'Ursinho de pelúcia', 'Patinete',
                'Kit de pintura', 'Cavalinho de balanço', 'Pião', 'Livro de histórias',
            ]),
            'ano' => (int) date('Y'),
            'status' => 'recebida',
        ];
    }
}
