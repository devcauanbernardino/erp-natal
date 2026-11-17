<?php

namespace Database\Factories;

use App\Models\Crianca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Crianca>
 */
class CriancaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => fake()->firstName() . ' ' . fake()->lastName(),
            'data_nascimento' => fake()->dateTimeBetween('-12 years', '-3 years')->format('Y-m-d'),
            'cidade' => fake()->city(),
        ];
    }
}
