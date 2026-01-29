<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ElementType extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'training_id' // Relación con el bloque de capacitación
    ];

    // Relación hacia capacitaciones (opcional)
    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }

    // Un tipo puede ser usado por muchos elementos
    public function elements(): HasMany
    {
        return $this->hasMany(Element::class);
    }
}