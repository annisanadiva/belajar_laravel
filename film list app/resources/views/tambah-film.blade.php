@extends('app')

@section('content')
    <h1>Welcome to the Tambah Film Page</h1>
    <form action="{{route('film.simpan')}}" method="post">
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
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection