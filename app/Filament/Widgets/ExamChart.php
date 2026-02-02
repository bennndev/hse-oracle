<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ExamChart extends ChartWidget
{
    public function getHeading(): string
    {
        return 'Resultados de Exámenes';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Resultados',
                    'data' => [40, 25, 20, 15],
                    'backgroundColor' => [
                        '#22c55e', // verde
                        '#eab308', // amarillo
                        '#f97316', // naranja
                        '#ef4444', // rojo
                    ],
                ],
            ],
            'labels' => [
                'Aprobados',
                'En proceso',
                'Observados',
                'Desaprobados',
            ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut'; // también puede ser 'pie'
    }
}
