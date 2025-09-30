<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $data = "Selamat Datang di Halaman Home";
        $angka = 5;
        return view('home', compact('data', 'angka'));
    }
}