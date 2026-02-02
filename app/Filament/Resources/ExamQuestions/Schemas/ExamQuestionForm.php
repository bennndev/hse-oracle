<?php

namespace App\Filament\Resources\ExamQuestions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use App\Models\Exam;

class ExamQuestionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('exam_id')
                ->label('Examen')
                ->relationship('exam', 'titulo')
                ->required(),

            Textarea::make('pregunta')
                ->label('Pregunta')
                ->required(),

            TextInput::make('respuesta_correcta')
                ->label('Respuesta correcta')
                ->required(),

            TextInput::make('orden')
                ->numeric()
                ->default(0),
        ]);
    }
}

