<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $brand = CarModel::pluck('brand_id')->toArray();
        $model = CarModel::pluck('id')->toArray();
        return [
            "car_brand_id" => $this->faker->randomElement($brand),
            "car_model_id" => $this->faker->randomElement($model),
        ];
    }
}
