<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    protected $fillable = [
        'codigo',
        'version',
        'obj_general',
        'autor',
        'fecha_emision',
        'fecha_edicion',
        'fecha_revision',
        'supervisor_id'
    ];

    // Relación con los elementos centralizados
    public function elements(): HasMany
    {
        return $this->hasMany(Element::class);
    }

    // Relación con la tabla de supervisores según tu migración
    public function supervisor(): BelongsTo
    {
        return $this->belongsTo(Supervisor::class);
    }
}