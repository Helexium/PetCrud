@extends('layout')

@section('content')
    <h2>Add New Pet</h2>

    <form method="POST" action="{{ route('pets.store') }}">
        @csrf
        @include('pets.form')
        <button type="submit" class="btn btn-success">Add Pet</button>
    </form>
@endsection
