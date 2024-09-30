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
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);
        $name   = $gender == 'Male' ? $this->faker->firstNameMale() : $this->faker->firstNameFemale();
        $birthdate = $this->faker->dateTimeBetween('-47 years', '-17 years');

        return [
            'document'          => fake() -> isbn13(),
            'fullname'          => fake() -> name(),
            'gender'            => fake() -> randomElement(array('Female','Male')),
            'birthdate'         => fake() -> date(),
            'phone'             => fake() -> phoneNumber(),
            'email'             => fake() -> unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => static::$password ??= Hash::make('12345'),
            'remember_token'    => Str::random(10),
            'photo'             => $this->faker->image(public_path('images/'), 140, 140, null, false)
        ];
    }

    /*
    Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
