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


Route::get('/v', function () {
    return view('validar');
   });


Route::get('/', function () {
    return view('inicio');
   });


   Route::get('/H', function () {
    return view('Historias');
   });

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', function () {
    return view('login');
})->name('login.form');

// Ruta para procesar el inicio de sesión
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/o', function () {
    return view('Oncologos');
   });


   Route::get('/c', function () {
    return view('cancer');
   });


   Route::get('/i', function () {
    return view('apyo_y_recursos');
   });