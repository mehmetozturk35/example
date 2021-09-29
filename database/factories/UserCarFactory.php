<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use App\Models\UserCar;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::pluck('id')->toArray();
        $car = Car::pluck('id')->toArray();
        return [
            "user_id" => $this->faker->randomElement($user),
            "car_id" => $this->faker->randomElement($car),
        ];
    }
}
