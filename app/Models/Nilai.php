<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory; // ✅ Agar bisa pakai factory()

    protected $fillable = [
        'user_id',
        'mata_pelajaran_id',
        'nilai'
    ]; // ✅ Agar bisa mass-assignment saat seeder atau input

    // Relasi ke mata pelajaran
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }

    // Relasi ke user/siswa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
