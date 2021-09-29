<?php

namespace Database\Seeders;

use App\Models\UserCar;
use Database\Factories\UserCarFactory;
use Illuminate\Database\Seeder;

class UserCarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCar::factory()->count(5)->create();
    }
}
