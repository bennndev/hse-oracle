<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'position_type_id'];

    public function positionType(): BelongsTo
    {
        return $this->belongsTo(PositionType::class);
    }
}
