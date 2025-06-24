<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    // Relasi ke nilai
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
