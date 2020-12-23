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
        "catogory_id" => 1,
        "title" => $this->faker->title,
        "orignal_price" => 2,
        "discount_price" =>2,
        "in_stock" => 1,
        "status" =>1,
        ];
    }
}
