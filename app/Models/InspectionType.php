<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InspectionType extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function inspections(): HasMany
    {
        return $this->hasMany(Inspection::class);
    }
}
