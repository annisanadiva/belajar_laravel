@extends('layouts.app')

@section('content')
    <div>
        @if ($errors->any())
            <div style="color: red;">
                {{ $errors->first() }}
            </div>
        @else
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <h1>Welcome to Home page</h1>
    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endsection