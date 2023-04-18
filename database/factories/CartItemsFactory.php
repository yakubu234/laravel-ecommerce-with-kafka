<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CartItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text,
            "price" => $this->faker->numberBetween(25, 900),
            "in_stock" => $this->faker->numberBetween(25, 45),
            "img_src" => $this->faker->randomElement([
                "https://images.unsplash.com/photo-1482062364825-616fd23b8fc1?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=cc37ced2e51f9f58430dfed1192067cd",
                "https://images.unsplash.com/photo-1516101922849-2bf0be616449?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=506cdfe576a1dd5545a2850ac143b2be",
                "https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=c9cebb448c07815ac2a1c4141b4cdd18",
                "https://images.unsplash.com/photo-1485856407642-7f9ba0268b51?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=5a819fb0cd534e9c1af5d38c4983eeb3",
                "https://images.unsplash.com/photo-1489875347897-49f64b51c1f8?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=1174b1ff26fccde5cdfda64087bfc6ac",
                "https://images.unsplash.com/photo-1472437774355-71ab6752b434?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=070ca0d38724c4382129ae8e0004a5ba"
            ]),
        ];
    }
}
