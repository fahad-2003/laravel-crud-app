<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            'name' => 'Toyota Corolla',
            'color' => 'Red',
            'company' => 'Toyota',
            'user_id' => 1, 
        ]);
    }
}
