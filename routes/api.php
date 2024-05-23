<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescribeController;

Route::get('/prescribes', [PrescribeController::class, 'index']);
Route::post('/prescribes', [PrescribeController::class, 'store']);
Route::get('/prescribes/{prescribe}', [PrescribeController::class, 'show']);
Route::put('/prescribes/{prescribe}', [PrescribeController::class, 'update']);
Route::delete('/prescribes/{prescribe}', [PrescribeController::class, 'destroy']);


Route::get('/patients', [PatientController::class, 'index']);
Route::post('/patients', [PatientController::class, 'store']);
Route::get('/patients/{patient}', [PatientController::class, 'show']);
Route::put('/patients/{patient}', [PatientController::class, 'update']);
Route::delete('/patients/{patient}', [PatientController::class, 'destroy']);
