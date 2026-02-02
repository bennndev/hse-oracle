<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionAlternative extends Model
{
    protected $table = 'question_alternatives';

    protected $fillable = [
        'exam_question_id',
        'descripcion',
    ];

    public function question()
    {
        return $this->belongsTo(ExamQuestion::class, 'exam_question_id');
    }
}
