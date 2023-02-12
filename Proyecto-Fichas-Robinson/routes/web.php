<?php

use Illuminate\Support\Facades\Route;

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

