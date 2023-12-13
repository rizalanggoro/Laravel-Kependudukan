<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AparatSipilNegara extends Model
{
    use HasFactory;

    public function pekerjaan(): HasOne
    {
        return $this->hasOne(Pekerjaan::class, 'id_pekerjaan', 'id_pekerjaan');
    }
}
