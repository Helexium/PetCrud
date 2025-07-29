@extends('layout')

@section('content')
    <h2>Edit Pet</h2>

    <form method="POST" action="{{ route('pets.update', $pet) }}">
        @csrf
        @method('PUT')
        @include('pets.form', ['pet' => $pet])
        <button type="submit" class="btn btn-primary">Update Pet</button>
    </form>
@endsection
