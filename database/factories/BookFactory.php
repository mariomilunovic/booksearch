<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'author' =>  $this->faker->firstName.' '.$this->faker->lastName,
            'publisher' =>  $this->faker->company.' Publishing',
            'published_at' =>  $this->faker->date(),

        ];
    }
}
