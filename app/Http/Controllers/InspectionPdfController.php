<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InspectionPdfController extends Controller
{
    public function download(Inspection $inspection)
    {
        // Load relationships needed for the PDF
        $inspection->load([
            'inspectionType', 
            'activity', 
            'location', 
            'user'
        ]);

        $pdf = Pdf::loadView('pdf.inspection', compact('inspection'));
        
        return $pdf->download("inspeccion-{$inspection->id}.pdf");
    }
}
