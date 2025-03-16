<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Report2Controller;
use App\Http\Controllers\incident_otherController;
use App\Http\Controllers\incident_other2Controller;
// Route principale vers la première page (incident)
Route::get('/', function () {
    return view('pages.incident');
})->name('incident');

// Route vers la deuxième page (report)
Route::get('/report', function () {
    return view('pages.report'); // Assurez-vous que report.blade.php existe bien dans resources/views/pages
})->name('report');
Route::get('/report2', function () {
    return view('pages.report2'); // Assurez-vous que report.blade.php existe bien dans resources/views/pages
})->name('report2');
Route::get('/incident/other', function () {
    return view('pages.incident_other');
})->name('incident.other');

Route::get('/incident/other2', function () {
    return view('pages.incident_other2');
})->name('incident.other2');

// Route pour soumettre l'incident
Route::post('/incident/submit', [IncidentController::class, 'submit'])->name('incident.submit');
Route::get('/incident_other2', [incident_other2Controller::class, 'index'])->name('incident_other2');
Route::get('/incident_other', [incident_otherController::class, 'index'])->name('incident_other');
Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::get('/report2', [Report2Controller::class, 'index'])->name('report2');