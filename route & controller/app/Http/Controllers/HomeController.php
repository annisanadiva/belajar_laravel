<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        $data = [
            'judul' => 'Selamat Datang',
            'pesan' => 'Ini view dari controller'
        ];
        return view('welcome_page', $data);
    }
}