@extends('backend.layout.app')

@section('content')
<div class="container">
    <h2>Destinations</h2>

    <a href="{{ route('destinations.create') }}" class="btn btn-primary mb-3">Add Destination</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Country</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($destinations as $destination)
            <tr>
                <td>{{ $destination->title }}</td>
                <td><img src="{{ asset('storage/' . $destination->image) }}" width="100"></td>
                <td>
                    <form action="{{ route('destinations.toggle', $destination->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm {{ $destination->is_active ? 'btn-success' : 'btn-warning' }}">
                            {{ $destination->is_active ? 'Active' : 'Inactive' }}
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
