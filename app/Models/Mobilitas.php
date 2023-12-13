<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mobilitas extends Model
{
    use HasFactory;

    public function transmigrasi(): HasOne
    {
        return $this->hasOne(Transmigrasi::class, 'id_mobilitas', 'id_mobilitas');
    }

    public function imigrasi(): HasOne
    {
        return $this->hasOne(Imigrasi::class, 'id_mobilitas', 'id_mobilitas');
    }

    public function emigrasi(): HasOne
    {
        return $this->hasOne(Emigrasi::class, 'id_mobilitas', 'id_mobilitas');
    }
}
