<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Nilai;
use App\Models\MataPelajaran;
use Illuminate\Support\Facades\Hash;

class DummyDataSeeder extends Seeder
{
    public function run()
    {
        // Buat mata pelajaran
        $mapel = MataPelajaran::create(['nama' => 'Matematika']);

        // Buat siswa
        $siswa = User::create([
            'name' => 'Ani Siswa',
            'email' => 'ani@example.com',
            'password' => Hash::make('password'),
            'role' => 'siswa',
            'nis' => '654321',
            'kelas' => 'X IPA 2'
        ]);

        // Buat guru
        User::create([
            'name' => 'Pak Dosen',
            'email' => 'dosen@example.com',
            'password' => Hash::make('password'),
            'role' => 'guru',
            'no_telepon' => '082233445566',
            'alamat' => 'Jl. Kampus'
        ]);

        // Buat nilai siswa
        Nilai::create([
            'user_id' => $siswa->id,
            'mata_pelajaran_id' => $mapel->id,
            'nilai' => 90
        ]);
    }
}

