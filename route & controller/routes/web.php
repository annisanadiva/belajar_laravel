<?php

use Illuminate\Support\Facades\Route;

Route::get('/halo', function () {
    return view('halo', ['nama' => 'everyone']); 
});

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome']);