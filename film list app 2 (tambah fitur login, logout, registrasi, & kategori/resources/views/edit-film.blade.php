@extends('layouts.app')

@section('content')
    <h1>Welcome to the Edit Film Page</h1>
    <form action="/update-film/{{$film->id}}" method="post">
        @csrf
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul" value="{{$film->judul}}" required>
        </div>
        <div>
            <label for="">Pemeran</label>
            <input type="text" name="pemeran" value="{{$film->pemeran}}" required>
        </div>
        <div>
            <label for="">Rumah Produksi</label>
            <input type="text" name="rumah_produksi" value="{{$film->rumah_produksi}}" required>
        </div>
         <div>
            <label for="">Kategori Film</label>
            <select name="kategori_film_id" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoriFilm as $kategori)
                    <option value="{{ $kategori->id }}" 
                        {{ $buku->kategori_film_id == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection