<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SimpanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'landingPostinga'])->name('landing');
Route::get('/detail-postingan/{id}', [ViewController::class, 'detailPostinga'])->name('detail-postingan');
Route::get('/create-lamaran/{id}', [ViewController::class, 'createLamaran'])->name('create-lamaran');
Route::get('/list-lamaran-landing', [ViewController::class, 'listLamaranLanding'])->name('list-lamaran-landing');

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
    Route::get('posting/bayar/{id}', [PostingController::class, 'bayar'])->name('posting.bayar')->middleware('auth');

    Route::get('/cari-pekerjaan', [LamaranController::class, 'index'])->name('cari-pekerjaan')->middleware('auth');
    Route::get('/show-pekerjaan/{id}', [LamaranController::class, 'showPekerjaan'])->name('show-pekerjaan')->middleware('auth');
    Route::get('/create-pekerjaan/{id}', [LamaranController::class, 'createPekerjaan'])->name('create-pekerjaan')->middleware('auth');
    Route::post('/auth-pekerjaan', [LamaranController::class, 'store'])->name('auth-pekerjaan')->middleware('auth');

    Route::get('/pelamar/{id}', [LamaranController::class, 'indexPelamar'])->name('pelamar')->middleware('auth');
    Route::get('/list-lamaran', [LamaranController::class, 'listLamaran'])->name('list-lamaran')->middleware('auth');
    Route::get('/review/{id}', [ReviewController::class, 'index'])->name('review')->middleware('auth');
    Route::post('/create-review', [ReviewController::class, 'store'])->name('create-review')->middleware('auth');

    Route::post('/simpan-lamaran', [SimpanController::class, 'store'])->name('simpan-lamaran')->middleware('auth');
});

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/auth-login', [UserController::class, 'auth'])->name('auth-login')->middleware('guest');
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register/{role}', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/auth-register/{role}', [UserController::class, 'authRegister'])->name('auth-register')->middleware('guest');
