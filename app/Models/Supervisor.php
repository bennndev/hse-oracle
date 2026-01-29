<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supervisor extends Model
{
    protected $fillable = [
        'nombre',
        'firma',
    ];

    /**
     * Un supervisor puede ser responsable de muchos programas.
     */
    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }
}