<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'logo' => $this->faker->imageUrl(200, 200, null, true),
            'email' => $this->faker->email(),
            'phone_no' => $this->faker->phoneNumber(),
            'web_url' => $this->faker->url(),
        ];
    }
}
