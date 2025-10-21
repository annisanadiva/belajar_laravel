@extends('layouts.app')

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
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($film as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->pemeran }}</td>
                    <td>{{ $item->rumah_produksi }}</td>
                    <td>{{ $item->kategoriBuku ? $item->kategoriBuku->nama_kategori : 'Tidak ada kategori' }}</td>
                    <td>
                        <a href="/edit-film/{{ $item->id }}"><button>Edit</button></a>
                        <form action="/hapus-film/{{ $item->id }}" method="post" style="display:inline;"
                            onsubmit="return confirm('Ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
