@extends('backend.layout.app')
@section('content')
<div class="container py-4">
    <h4 class="mb-4">All Package Destinations</h4>

    <a href="{{ route('pakagedestinations.create') }}" class="btn btn-primary mb-3">Add New Package</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Destination</th>
                <th>Price</th>
                <th>Featured</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->destination->title }}</td>
                <td>${{ $item->price }}</td>
                <td>{{ $item->is_featured ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('pakagedestinations.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('pakagedestinations.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this package?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
