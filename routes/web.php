<?php

use App\Models\Alumno;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;
use App\Models\Puesto;

Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('/alumnos.ver/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.ver');
Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');


Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos.editar/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.editar');

Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');

Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');

Route::get('/puestos.ver/{puesto}', [PuestoController::class, 'show'])->name('puestos.ver');
Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');


Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
Route::get('/puestos.editar/{puesto}', [PuestoController::class, 'edit'])->name('puestos.editar');



Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');



Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
