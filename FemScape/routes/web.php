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

Route::get('/', [TripsController::class, 'index']);

Route::get('indexUsers', [TripsController::class, 'indexUsers']);

Route::get('create', [TripsController::class, 'create']);

Route::get('edit', [TripsController::class, 'edit']);

Route::delete('delete/{trip}', [TripsController::class, 'destroy'])->name('trip.destroy');


Route::get('/', [TripsController::class, 'app'])->name('search');
