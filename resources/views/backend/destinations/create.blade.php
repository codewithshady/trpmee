@extends('backend.layout.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <!-- Card Start -->
            <div class="card border-0 shadow-lg rounded">
                <div class="card-header bg-gradient bg-primary text-white py-3">
                    <h5 class="mb-0 fw-bold">Add New Destination</h5>
                </div>
                <div class="card-body p-4">
                    <!-- Form Start -->
                    <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Title Field -->
                        <div class="form-floating mb-4">
                            <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Destination Title" required>
                            <label for="title">Destination Country</label>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-4">
                            <label for="image" class="form-label fw-semibold">Upload Image <span class="text-danger">*</span></label>
                            <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" required>
                            @error('image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-plus-circle me-1"></i> Save Destination
                            </button>
                        </div>
                    </form>
                    <!-- Form End -->
                </div>
            </div>
            <!-- Card End -->
        </div>
    </div>
</div>
@endsection
