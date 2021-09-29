<?php

namespace Database\Factories;

use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $brand = CarBrand::pluck('id')->toArray();
        return [
            "brand_id" => $this->faker->randomElement($brand),
            "model_name" => $this->faker->name()
        ];
    }
}
