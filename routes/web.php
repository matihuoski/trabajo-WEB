<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.principal');
});



Route::get('/Admin', [App\Http\Controllers\HomeController::class, 'op'])->name('op');

Route::get('/Profesor', [App\Http\Controllers\HomeController::class, 'Profesor'])->name('Profesor');

Route::get('/Alumno', [App\Http\Controllers\HomeController::class, 'Alumno'])->name('Alumno');

Route::get('/', [App\Http\Controllers\HomeController::class, 'Inicio'])->name('Inicio');


