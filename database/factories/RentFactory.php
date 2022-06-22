<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rents>
 */
class RentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'total' => $this->faker->numberBetween(),
            'kelas_id' => $this->faker->numberBetween(1, 8),
            'inventory_id' => $this->faker->numberBetween(1, 9),
        ];
    }
}
