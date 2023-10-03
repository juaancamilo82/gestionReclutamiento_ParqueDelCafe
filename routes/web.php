<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::view('/', 'login');

// Ruta para mostrar la página de inicio de sesión
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

// Ruta para mostrar la página de registro
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

