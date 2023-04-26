<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Encargado extends Model
{
    use HasFactory;

    public function edificios(): BelongsTo
    {
        return $this->belongsTo(Edificio::class);
    }
}
