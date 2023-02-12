<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tipo_ProgramasController;
use App\Http\Controllers\Aprendices_has_HorariosController;
use App\Http\Controllers\AprendicesController;
use App\Http\Controllers\FichasController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\TrimestresController;



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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {});

Route::get('/dashboard', function () {;return view('dashboard');})->name('dashboard');
Route::resource('Tipo_Programas',Tipo_ProgramasController::class);
Route::resource('Aprendices_has_Horarios',Aprendices_has_HorariosController::class);
Route::resource('Fichas',FichasController::class);
Route::resource('Horarios',HorariosController::class);
Route::resource('Programas',ProgramasController::class);
Route::resource('Trimestres',TrimestresController::class);
Route::resource('Aprendices',AprendicesController::class);
