<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keluarga extends Model
{
    use HasFactory;

    public function wilayah(): BelongsTo
    {
        return  $this->belongsTo(Wilayah::class, 'kode_provinsi', 'kode_provinsi');
    }
}
