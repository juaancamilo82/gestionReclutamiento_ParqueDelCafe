<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

// returns the home page with all posts


Route::view('/', "login")->name('login');
Route::view('/login', "login")->name('login');
Route::view('/registro', "registro")->name('registro');
Route::view('/informacion', "informacion")->middleware('auth')->name('informacion');
Route::view('/conocimientos', "conocimientos")->name('conocimientos');
Route::view('/experiencia', "experiencia")->name('experiencia');
Route::view('/preguntas', "preguntas")->name('preguntas');
Route::view('/documentacion', "documentacion")->name('documentacion');
Route::view('/revision', "revision")->name('revision');


Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/iniciar-sesion',[LoginController::class,'login'])->name('iniciar-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/validar-informacion',[PasosController::class,'informacion'])->name('validar-informacion');


