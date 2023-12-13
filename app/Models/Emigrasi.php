<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Emigrasi extends Model
{
    use HasFactory;

    public function mobilitas(): BelongsTo
    {
        return $this->belongsTo(Mobilitas::class, 'id_mobilitas', 'id_mobilitas');
    }
}
