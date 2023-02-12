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
    Route::get('/dashboard', function () {;return view('fichas.create');})->name('dashboard');
Route::get('/dashboard2', function () {;return view('fichas.index');})->name('dashboard2');
Route::get('/dashboard3', function () {;return view('aprendices.edit');})->name('dashboard2');
Route::get('/dashboard4', function () {;return view('aprendices.create');})->name('dashboard2');
Route::get('/dashboard5', function () {;return view('aprendices.index');})->name('dashboard2');
Route::get('/dashboard6', function () {;return view('aprendices.show');})->name('dashboard2');
Route::get('/dashboard7', function () {;return view('fichas.edit');})->name('dashboard2');
Route::get('/dashboard8', function () {;return view('fichas.show');})->name('dashboard2');
Route::get('/dashboard9', function () {;return view('horarios.index');})->name('dashboard2');




Route::resource('deliveries',Tipo_ProgramasController::class);
Route::resource('deliveries',Aprendices_has_HorariosController::class);
Route::resource('deliveries',FichasController::class);
Route::resource('deliveries',HorariosController::class);
Route::resource('deliveries',ProgramasController::class);
Route::resource('deliveries',TrimestresController::class);
Route::resource('deliveries',AprendicesController::class);
