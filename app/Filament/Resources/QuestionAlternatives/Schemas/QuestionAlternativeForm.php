<?php

namespace App\Filament\Resources\QuestionAlternatives\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use App\Models\ExamQuestion;


class QuestionAlternativeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('exam_question_id')
                ->label('Pregunta')
                ->relationship('question', 'pregunta')
                ->required(),

            Textarea::make('descripcion')
                ->label('Alternativa')
                ->required(),
        ]);
    }
}
