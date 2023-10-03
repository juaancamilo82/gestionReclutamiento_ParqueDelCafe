<?php

use Illuminate\Support\Facades\Route;

// Rutas para mostrar las páginas de inicio de sesión y registro
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/personalInformation', function () {
    return view('personalInformation');
})->name('personalInformation');

// Ruta para mostrar la vista de inicio
Route::view('/', 'login')->name('login');



