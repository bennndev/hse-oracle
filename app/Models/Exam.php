<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';

    protected $fillable = [
        'training_id',
        'titulo',
        'url',
    ];

    // Relaciones (las usaremos luego)
    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function questions()
    {
        return $this->hasMany(ExamQuestion::class);
    }
}
