@extends('layouts.app')

@section('content')
    <h1>Welcome to the Tambah Film Page</h1>
    <form action="/simpan-film" method="post">
        @csrf
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul">
        </div>
        <div>
            <label for="">Pemeran</label>
            <input type="text" name="pemeran">
        </div>
        <div>
            <label for="">Rumah Produksi</label>
            <input type="text" name="rumah_produksi">
        </div>
        <div>
            <label for="">Kategori Film</label>
            <select name="kategori_film_id" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoriFilm as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection