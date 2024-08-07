<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
    //     return [
    //         'fname' => 'Black roses',
    //         'lname' => 'support',
    //         'email' => 'info@blackrosessupport.co.uk',
    //         'email_verified_at' => now(),
    //         'password' => static::$password ??= Hash::make('1234567890'),
    //         'remember_token' => Str::random(10),
    //     ];
    // }

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid,
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'remember_token' => Str::random(10),
            'password' => Hash::make('1234567890'),
            'email_verified_at' => now(),
            'avatar' => $this->faker->imageUrl(400, 400, 'people', true, 'Faker'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
