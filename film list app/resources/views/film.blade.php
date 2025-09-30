@extends('app')

@section('content')
    <h1>Welcome to the Film List Page</h1>
    <div>
        <a href="{{ route('film.tambah') }}"><button>Tambah Film</button></a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pemeran</th>
                <th>Rumah Produksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($film as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->pemeran }}</td>
                    <td>{{ $item->rumah_produksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
