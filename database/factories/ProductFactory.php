<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->name;
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug' => $slug,
            'price' => $this->faker->numberBetween(0, 10000000),
            'stock' => $this->faker->randomDigit,
            'description' => $this->faker->paragraphs($nb = 4, $asText = true),
            'image' => $this->faker->imageUrl(640, 480),
            // 'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'supplier_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}