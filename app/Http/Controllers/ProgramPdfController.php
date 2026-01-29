<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProgramPdfController extends Controller
{
    public function download(Program $program)
    {
        // Load relationships needed for the PDF
        $program->load([
            'elements.subElement', 
            'elements.specificObjective', 
            'elements.activity', 
            'supervisor'
        ]);

        $pdf = Pdf::loadView('pdf.program', compact('program'));
        
        return $pdf->download("programa-{$program->codigo}.pdf");
    }
}
