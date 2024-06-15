<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/register/{role}', [UserController::class, 'register'])->name('register');
Route::post('/register/{role}', [UserController::class, 'authRegister'])->name('register');

