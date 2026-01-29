<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Activity extends Model
{
    protected $fillable = ['nombre', 'codigo', 'frecuencia', 'location_id'];

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
