<?php

namespace Database\Factories;

use\App\Models\Streamer;
use Illuminate\Support\Streamer;
use Illuminate\Database\Eloquent\Factories\Factory;

class streamerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_chaine'=> $this->faker->name(),
            'emplacement'=> str::random(2),
        ];
    }
}
