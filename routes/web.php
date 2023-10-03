<?php

use Illuminate\Support\Facades\Route;

// Rutas para mostrar las páginas de inicio de sesión y registro
Route::get('/inicio_sesion', function () {
    return view('inicio_sesion');
})->name('inicio_sesion');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/informacion_personal', function () {
    return view('informacion_personal');
})->name('informacion_personal');

Route::get('/conocimientos', function () {
    return view('conocimientos');
})->name('conocimientos');

// Ruta para mostrar la vista de inicio
Route::view('/', 'inicio_sesion')->name('inicio_sesion');



