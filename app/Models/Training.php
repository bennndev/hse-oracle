<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'trainings';

    protected $fillable = [
        'activity_id',
        'titulo',
        'descripcion',
        'url_video',
        'nota_minima',
        'estado',
        'fecha_inicio',
        'fecha_fin',
        'duracion_horas',
        'instructor_id',
    ];
}
