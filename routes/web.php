<?php

use App\Http\Controllers\AyudaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HoraController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RespuestaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('portada');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/horas/pagos/{id}',[HoraController::class,'pago'])->name('pago');
Route::resource('/horas',HoraController::class)->middleware('auth');
Route::get('/perfil',[PerfilController::class,'index'])->middleware('auth');
Route::resource('/ayudas',AyudaController::class)->middleware('auth');
Route::resource('/gestionmedicos',MedicoController::class)->middleware('auth');
Route::resource('/respuestas',RespuestaController::class)->middleware('auth');
Route::resource('/gestionempleados',EmpleadoController::class)->middleware('auth');
