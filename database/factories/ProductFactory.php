<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'       => $this->faker->colorName() . ' ' . $this->faker->name(),
            'cost'       => $this->faker->randomFloat(4, 10, 1000),
            'commission' => $this->faker->randomFloat(2, 0, 20),
        ];
    }
}
