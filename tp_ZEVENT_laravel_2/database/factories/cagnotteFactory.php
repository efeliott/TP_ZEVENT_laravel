<?php

namespace Database\Factories;


use Illuminate\Support\cagnotte;
use Illuminate\Database\Eloquent\Factories\Factory;

class cagnotteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'goal_cagnotte'=> $this->faker->random_int(0,100),
        ];
    }
}