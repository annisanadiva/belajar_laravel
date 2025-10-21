<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\KategoriFilm;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();
        return view('film', compact('film'));
    }

    public function create(){
        $kategoriFilm = KategoriFilm::all();
        return view('tambah-film', compact('kategoriFilm'));
    }

    public function store(Request $request){
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'pemeran' => 'required|max:255',
            'rumah_produksi' => 'required|max:255',
            'kategori_film_id' => 'required|exists:kategori_film,id',
        ]);

        Film::create($validasiData);
        return redirect('/film');
    }

        public function edit($id) {
        $film = Film::find($id);
        $kategoriFilm = KategoriFilm::all();
        return view('edit-film', compact('film', 'kategoriFilm'));
    }

    public function update(Request $request, $id) {
        $validasi = $request->validate([
            'judul' => 'required|string|sometimes|max:255',
            'pemeran' => 'required|string|sometimes|max:255',
            'rumah_produksi' => 'required|string|sometimes|max:255',
            'kategori_film_id' => 'required|exists:kategori_film,id',
        ]);

        Film::where('id', $id)->update($validasi);
        return redirect('/film');
    }

    public function destroy($id) {
        Film::destroy($id);
        return redirect('/film');
    }
}