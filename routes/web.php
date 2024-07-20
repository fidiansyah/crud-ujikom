<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DashboardController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
    Route::get('/dosens/create', [DosenController::class, 'create'])->name('dosens.create');
    Route::post('/dosens', [DosenController::class, 'store'])->name('dosens.store');
    Route::get('/dosens/{id}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
    Route::put('/dosens/{id}', [DosenController::class, 'update'])->name('dosens.update');
    Route::delete('/dosens/{id}', [DosenController::class, 'destroy'])->name('dosens.destroy');

    Route::get('/matkuls', [MatkulController::class, 'index'])->name('matkuls.index');
    Route::get('/matkuls/create', [MatkulController::class, 'create'])->name('matkuls.create');
    Route::post('/matkuls', [MatkulController::class, 'store'])->name('matkuls.store');
    Route::get('/matkuls/{id}/edit', [MatkulController::class, 'edit'])->name('matkuls.edit');
    Route::put('/matkuls/{id}', [MatkulController::class, 'update'])->name('matkuls.update');
    Route::delete('/matkuls/{id}', [MatkulController::class, 'destroy'])->name('matkuls.destroy');

    Route::get('/jadwals', [JadwalController::class, 'index'])->name('jadwals.index');
    Route::get('/jadwals/create', [JadwalController::class, 'create'])->name('jadwals.create');
    Route::post('/jadwals', [JadwalController::class, 'store'])->name('jadwals.store');
    Route::get('/jadwals/{id}/edit', [JadwalController::class, 'edit'])->name('jadwals.edit');
    Route::put('/jadwals/{id}', [JadwalController::class, 'update'])->name('jadwals.update');
    Route::delete('/jadwals/{id}', [JadwalController::class, 'destroy'])->name('jadwals.destroy');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
