@extends('layout')

@section('content')
    <h2>All Pets</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">Add New Pet</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Type</th><th>Breed</th><th>Age</th><th>Owner</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
                <tr>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->type }}</td>
                    <td>{{ $pet->breed }}</td>
                    <td>{{ $pet->age }}</td>
                    <td>{{ $pet->owner }}</td>
                    <td>
                        <a href="{{ route('pets.edit', $pet) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pets.destroy', $pet) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this pet?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
