<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LamaranController;
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
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard')->middleware('auth');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
    Route::patch('/edit-profile/{id}', [UserController::class, 'edit'])->name('edit-profile')->middleware('auth');
    Route::patch('/update-profile/{id}', [UserController::class, 'update'])->name('update-profile')->middleware('auth');

    Route::post('/pengalaman-kerja', [ExperienceController::class, 'create'])->name('pengalaman-kerja')->middleware('auth');
    Route::get('/create-pengalaman-kerja', [ExperienceController::class, 'createPengalamanKerja'])->name('create-pengalaman-kerja')->middleware('auth');
    Route::get('/create-keterampilan', [ExperienceController::class, 'createKetampilan'])->name('create-keterampilan')->middleware('auth');
    Route::post('/skill', [SkillController::class, 'create'])->name('skill')->middleware('auth');
    Route::resource('posting', PostingController::class)->middleware('auth');

    Route::get('/cari-pekerjaan', [LamaranController::class, 'index'])->name('cari-pekerjaan')->middleware('auth');
    Route::post('/show-pekerjaan/{id}', [LamaranController::class, 'showPekerjaan'])->name('show-pekerjaan')->middleware('auth');
    Route::post('/create-pekerjaan/{id}', [LamaranController::class, 'createPekerjaan'])->name('create-pekerjaan')->middleware('auth');
    Route::post('/auth-pekerjaan', [LamaranController::class, 'create'])->name('auth-pekerjaan')->middleware('auth');
});

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/auth-login', [UserController::class, 'auth'])->name('auth-login')->middleware('guest');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register/{role}', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/auth-register/{role}', [UserController::class, 'authRegister'])->name('auth-register')->middleware('guest');
