<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\IndexUsersController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use Psy\Command\EditCommand;

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
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/indexUsers', [IndexUsersController::class, 'indexUsers'])->name('indexUsers');

Route::get('/index', [TripsController::class, 'index'])->name('index');

Route::get('create', [CreateController::class, 'create'])->name('create');
Route::post('create', [CreateController::class, 'store'])->name('create.store');

Route::get('{trip}', [TripsController::class, 'show'])->name('show');

Route::get('{trip}/edit', [EditController::class, 'edit'])->name('edit');
Route::put('{trip}', [EditController::class, 'update'])->name('update');

//Route::get('/confirmation-modal', function () {
// return view('confirmation-modal'); })->name('confirmation-modal');

Route::delete('indexUsers/{trip}', [TripsController::class, 'destroy'])->name('destroy');

Route::get('/', [TripsController::class, 'app'])->name('search');
