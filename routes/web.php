<?php

use Illuminate\Support\Facades\Route;

// Rutas para mostrar las páginas
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/informacion', function () {
    return view('informacion');
})->name('informacion');

Route::get('/conocimientos', function () {
    return view('conocimientos');
})->name('conocimientos');

Route::get('/experiencia', function () {
    return view('experiencia');
})->name('experiencia');

// Ruta para mostrar la vista de inicio
Route::view('/', 'login')->name('login');

