<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubElement extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    /**
     * Un sub-elemento puede estar presente en muchos elementos del programa.
     */
    public function elements(): HasMany
    {
        return $this->hasMany(Element::class);
    }
}