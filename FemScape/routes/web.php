<?php

use App\Http\Controllers\TripsController;
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

Route::get('/index', [TripsController::class, 'index'])->name('index');

Route::get('indexUsers', [TripsController::class, 'indexUsers'])->name('indexUsers');

Route::get('create', [TripsController::class, 'create'])->name('create');

Route::get('{id}', [TripsController::class, 'show'])->name('show');

Route::get('edit', [TripsController::class, 'edit'])->name('edit');

Route::delete('indexUsers/{trip}', [TripsController::class, 'destroy'])->name('destroy');

Route::get('/', [TripsController::class, 'app'])->name('search');
