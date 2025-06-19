<?php

namespace Database\Factories;

use App\Models\Docent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vak>
 */
class VakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->word,
            'description' => $this->faker->sentence,
            'docent_id' => Docent::inRandomOrder()->first()->id ?? Docent::factory(),
        ];
    }
}
