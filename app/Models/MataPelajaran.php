<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    //relasi dengan nilai
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

}
