<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripsController;

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

Route::get('/index', [TripsController::class, 'index'])->name('index');

Route::get('indexUsers', [TripsController::class, 'indexUsers'])->name('indexUsers');

// Inicio Neema

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Fin Neema

Route::get('create', [TripsController::class, 'create'])->name('create');

Route::get('edit', [TripsController::class, 'edit'])->name('edit');

Route::delete('indexUsers/{trip}', [TripsController::class, 'destroy'])->name('destroy');

Route::get('/', [TripsController::class, 'app'])->name('search');
