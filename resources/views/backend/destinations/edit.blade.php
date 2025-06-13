@extends('backend.layout.app')

@section('content')
<div class="container">
    <h2>Edit Destination</h2>

    <form action="{{ route('destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{ $destination->title }}" class="form-control" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label>Current Image</label><br>
            <img src="{{ asset('storage/' . $destination->image) }}" alt="Destination Image" width="150">
        </div>

        <div class="form-group">
            <label>New Image (optional)</label>
            <input type="file" name="image" class="form-control">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success mt-2">Update</button>
    </form>
</div>
@endsection
