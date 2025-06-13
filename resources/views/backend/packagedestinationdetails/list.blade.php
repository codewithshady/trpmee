@extends('backend.layout.app')
@section('content')
<div class="container py-4">
    <h4 class="mb-3">Package Destination Details</h4>

    <a href="{{ route('package-details.create') }}" class="btn btn-primary mb-3">Add New Detail</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Package</th>
                <th>Title</th>
                <th>Country</th>
                <th>Visa</th>
                <th>Price</th>
                <th>Featured</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $detail)
            <tr>
                <td>{{ $detail->package->title }}</td>
                <td>{{ $detail->title }}</td>
                <td>{{ $detail->country }}</td>
                <td>{{ $detail->visa_required ? 'Yes' : 'No' }}</td>
                <td>${{ $detail->price_per_person }}</td>
                <td>{{ $detail->is_featured ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('package-details.edit', $detail->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('package-details.destroy', $detail->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this detail?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
