<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', [HomeController::class, 'home']);
Route::get('/film', [FilmController::class, 'index'])->name('film');
Route::get('film/tambah', [FilmController::class, 'create'])->name('film.tambah');
Route::post('film/store', [FilmController::class, 'store'])->name('film.simpan');