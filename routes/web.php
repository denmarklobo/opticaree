<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescribeController;

Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{patient}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy');



Route::get('/prescribes', [PrescribeController::class, 'index'])->name('prescribes.index');
Route::get('/prescribes/create', [PrescribeController::class, 'create'])->name('prescribes.create');
Route::post('/prescribes', [PrescribeController::class, 'store'])->name('prescribes.store');
Route::get('/prescribes/{prescribe}', [PrescribeController::class, 'show'])->name('prescribes.show');
Route::get('/prescribes/{prescribe}/edit', [PrescribeController::class, 'edit'])->name('prescribes.edit');
Route::put('/prescribes/{prescribe}', [PrescribeController::class, 'update'])->name('prescribes.update');
Route::delete('/prescribes/{prescribe}', [PrescribeController::class, 'destroy'])->name('prescribes.destroy');


