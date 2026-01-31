<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/programs/{program}/pdf', [\App\Http\Controllers\ProgramPdfController::class, 'download'])->name('programs.pdf');
Route::get('/inspections/{inspection}/pdf', [\App\Http\Controllers\InspectionPdfController::class, 'download'])->name('inspections.pdf');
