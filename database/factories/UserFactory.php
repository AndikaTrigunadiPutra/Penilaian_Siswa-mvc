<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // default password
            'remember_token' => Str::random(10),
            'role' => 'siswa', // default siswa, bisa ditimpa nanti
            'nis' => fake()->unique()->numerify('123###'),
            'kelas' => fake()->randomElement(['X IPA 1', 'X IPA 2', 'XI IPS 1']),
        ];
    }
}
