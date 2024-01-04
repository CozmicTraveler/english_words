<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\English>
 */
class EnglishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>1,
            'word'=>$this->faker->realText(10),
            'meaning1'=>$this->faker->realText(20),
            'meaning2'=>$this->faker->realText(20),
            'memo'=>$this->faker->realText(20),
            'created_by'=>$this->faker->realText(10),
        ];
    }
}
