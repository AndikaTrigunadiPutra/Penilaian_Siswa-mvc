<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //relasi
    public function mataPelajaran()
{
    return $this->belongsTo(MataPelajaran::class);
}
    public function user()
{
    return $this->belongsTo(User::class);
}

}
