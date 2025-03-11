<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;

Route::get('/incident', function () {
    return view('pages.incident');
});

Route::post('/incident/submit', [IncidentController::class, 'submit'])->name('incident.submit');




require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
