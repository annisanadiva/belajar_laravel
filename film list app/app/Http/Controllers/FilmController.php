<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();
        return view('film', compact('film'));
    }

    public function create(){
        return view('tambah-film');
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'pemeran' => 'required|max:255',
            'rumah_produksi' => 'required|max:255',
        ]);

        Film::create($validasiData);
        return redirect('film');
    }
}