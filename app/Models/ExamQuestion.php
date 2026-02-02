<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    protected $table = 'exam_questions';

    protected $fillable = [
        'exam_id',
        'pregunta',
        'respuesta_correcta',
        'orden',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

   public function alternatives()
    {
        return $this->hasMany(QuestionAlternative::class, 'exam_question_id');
    }

}
