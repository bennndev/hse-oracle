<?php

namespace App\Filament\Widgets;

use App\Models\Exam;
use Filament\Widgets\ChartWidget;

class ExamQuestionsChart extends ChartWidget
{
    public function getHeading(): string
    {
        return 'Preguntas por Examen';
    }

    protected function getData(): array
    {
        $exams = Exam::withCount('questions')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Cantidad de preguntas',
                    'data' => $exams->pluck('questions_count'),
                    'backgroundColor' => [
                        '#3b82f6',
                        '#22c55e',
                        '#f97316',
                        '#ef4444',
                        '#a855f7',
                    ],
                ],
            ],
            'labels' => $exams->pluck('titulo'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
