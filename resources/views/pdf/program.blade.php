<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Programa {{ $program->codigo }}</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        .header { text-align: center; margin-bottom: 20px; }
        .table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        .table th, .table td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .table th { background-color: #f2f2f2; }
        .title { font-size: 18px; font-weight: bold; }
        .subtitle { font-size: 14px; color: #555; }
        .section { margin-bottom: 15px; }
        .signature-box { margin-top: 50px; text-align: center; width: 200px; float: right; }
        .signature-line { border-top: 1px solid #000; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">Detalle del Programa</div>
        <div class="subtitle">{{ $program->codigo }} - Versión {{ $program->version }}</div>
    </div>

    <div class="section">
        <strong>Objetivo General:</strong>
        <p>{{ $program->obj_general }}</p>
    </div>

    <table class="table">
        <tr>
            <th>Autor</th>
            <td>{{ $program->autor }}</td>
            <th>Supervisor</th>
            <td>{{ optional($program->supervisor)->nombre ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Fecha Emisión</th>
            <td colspan="3">{{ $program->fecha_emision }}</td>
        </tr>
    </table>

    <h3>Elementos del Programa</h3>
    
    @php
        $hasSubElements = $program->elements->contains(fn($element) => $element->subElement !== null);
    @endphp

    <table class="table">
        <thead>
            <tr>
                <th>Elemento</th>
                <th>Objetivo</th>
                @if($hasSubElements)
                    <th>Sub-Elemento</th>
                @endif
                <th>Actividad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($program->elements as $element)
            <tr>
                <td>{{ $element->nombre }}</td>
                <td>{{ optional($element->specificObjective)->nombre }}</td>
                @if($hasSubElements)
                    <td>{{ optional($element->subElement)->nombre }}</td>
                @endif
                <td>{{ optional($element->activity)->nombre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="signature-box">
        @if(optional($program->supervisor)->firma)
            <img src="{{ $program->supervisor->firma }}" width="150" height="auto">
        @endif
        <div class="signature-line"></div>
        <p>Firma Supervisor</p>
    </div>
</body>
</html>
