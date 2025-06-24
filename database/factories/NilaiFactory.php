<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nilai>
 */
class NilaiFactory extends Factory
{
    public function definition(): array
{
    return [
        'user_id' => \App\Models\User::inRandomOrder()->where('role', 'siswa')->first()->id,
        'mata_pelajaran_id' => \App\Models\MataPelajaran::inRandomOrder()->first()->id,
        'nilai' => fake()->numberBetween(60, 100),
    ];
}

}
