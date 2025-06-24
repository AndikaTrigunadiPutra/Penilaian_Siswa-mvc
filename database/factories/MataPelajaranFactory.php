<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataPelajaran>
 */
class MataPelajaranFactory extends Factory
{
    public function definition(): array
{
    return [
        'nama' => fake()->unique()->randomElement([
            'Matematika', 'Bahasa Indonesia', 'Fisika', 'Kimia', 'Biologi', 'Sejarah', 'Geografi'
        ]),
    ];
}

}
