<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\UserController;

Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

Route::get('/film', [FilmController::class, 'index'])->name('film');
Route::get('/tambah-film', [FilmController::class, 'create'])->name('film.tambah');
Route::post('/simpan-film', [FilmController::class, 'store'])->name('film.simpan');
Route::get('/edit-film/{id}', [FilmController::class, 'edit'])->name('film.edit');
Route::put('/update-film/{id}', [FilmController::class, 'update'])->name('film.update');
Route::delete('/hapus-film/{id}', [FilmController::class, 'destroy'])->name('film.hapus');
});