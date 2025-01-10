<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'color' => $this->faker->colorName,
            'company' => $this->faker->company,
            'user_id' => \App\Models\User::factory(), 
        ];
    }
}
