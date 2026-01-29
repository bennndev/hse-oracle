<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SpecificObjective extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    // Relación con Elementos (ahora el elemento es quien lo busca)
    public function elements(): HasMany
    {
        return $this->hasMany(Element::class);
    }
}