<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'autor'=>$this->faker->name(),
            'descripcion'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Drama', 'Educacion']),
            'editorial'=>$this->faker->randomElement(['Santillana', 'Planeta'])
        ];
    }
}
