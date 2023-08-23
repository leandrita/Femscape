<?php

use App\Http\Controllers\TripsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/index', [TripsController::class, 'index'])->name('index');

Route::get('indexUsers', [TripsController::class, 'indexUsers'])->name('indexUsers');

Route::get('{trip}', [TripsController::class, 'show'])->name('show');

Route::get('create', [TripsController::class, 'create'])->name('create');

Route::get('{trip}/edit', [TripsController::class, 'edit'])->name('edit');

Route::put('{trip}', [TripsController::class, 'update'])->name('update');

Route::delete('indexUsers/{trip}', [TripsController::class, 'destroy'])->name('destroy');

Route::get('/', [TripsController::class, 'app'])->name('search');

Route::post('/create', [TripsController::class, 'store'])->name('create.store');
//Route::get('/confirmation-modal', function () {
   // return view('confirmation-modal'); })->name('confirmation-modal');