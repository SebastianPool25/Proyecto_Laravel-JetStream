<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    use HasFactory;

    public function edificios(): BelongsTo
    {
        return $this->belongsTo(Edificio::class);
    }

    public function empleados(): HasMany
    {
        return $this->hasMany(Empleados::class);
    }
    public function tramites(): HasMany
    {
        return $this->hasMany(Tramite::class);
    }
    
}
