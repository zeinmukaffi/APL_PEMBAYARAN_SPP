<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SPPController;

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

Route::get('/', [LoginController::class, 'index'])->name('loginform');
Route::post('/loginProses', [LoginController::class, 'loginProses'])->name('loginProses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::resources([
    'kelas' => KelasController::class,
    'spp' => SPPController::class,
]);