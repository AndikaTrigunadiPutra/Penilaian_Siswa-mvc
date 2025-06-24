<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
    // Buat guru
    \App\Models\User::factory()->create([
        'name' => 'Guru Admin',
        'email' => 'guru@example.com',
        'password' => bcrypt('password'),
        'role' => 'guru',
        'no_telepon' => '082112345678',
        'alamat' => 'Jl. Pendidikan No.1',
    ]);

    // Buat 10 siswa
    \App\Models\User::factory(10)->create();

    // Buat 5 mapel
    \App\Models\MataPelajaran::factory(5)->create();

    // Buat 50 nilai acak
    \App\Models\Nilai::factory(50)->create();
}

}
