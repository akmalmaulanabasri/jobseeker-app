<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PostingController;
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
    Route::middleware('isLogin')->group(function () {
        Route::get('/', function () {
            return view('dashboard.index');
        })->name('dashboard');
        Route::get('/profile', [UserController::class, 'profile'])->name('profile');
        Route::patch('/edit-profile/{id}', [UserController::class, 'edit'])->name('edit-profile');
        Route::patch('/update-profile/{id}', [UserController::class, 'update'])->name('update-profile');

        Route::post('/pengalaman-kerja', [ExperienceController::class, 'create'])->name('pengalaman-kerja');
        Route::get('/create-pengalaman-kerja', [ExperienceController::class, 'createPengalamanKerja'])->name('create-pengalaman-kerja');
        Route::get('/create-keterampilan', [ExperienceController::class, 'createKetampilan'])->name('create-keterampilan');
        Route::post('/skill', [SkillController::class, 'create'])->name('skill');
        Route::resource('posting', PostingController::class);
    });
});

Route::middleware('isGuest')->group(function () {

    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/auth-login', [UserController::class, 'auth'])->name('auth-login');
});

Route::get('/register/{role}', [UserController::class, 'register'])->name('register');
Route::post('/auth-register/{role}', [UserController::class, 'authRegister'])->name('auth-register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
