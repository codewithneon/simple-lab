<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email_verified_at' => now(),
            'mobile_verified_at' => now(),
            'image' => 'assets/images/user.png',
            'email' => fake()->unique()->safeEmail(),
            'remember_token' => Str::random(10),
            'mobile' => fake()->unique()->e164PhoneNumber,
            'password' => '$2y$10$V/4s9VlVVv9BlGDYqu1He.XomUQiyqBfO5kCz7iExzuQpHASDjYL2', // 12345678
            'designation' => '',
            'department' => '',
            'lab_name' => '',
            'degree' => '',
            'is_admin' => false,
            'status' => 0,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
