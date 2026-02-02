<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ExamBarChart extends ChartWidget
{
    public function getHeading(): string
    {
        return 'Exámenes por Nivel';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Cantidad',
                    'data' => [10, 20, 15, 8],
                    'backgroundColor' => '#3b82f6',
                ],
            ],
            'labels' => ['Inicial', 'Básico', 'Intermedio', 'Avanzado'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}

