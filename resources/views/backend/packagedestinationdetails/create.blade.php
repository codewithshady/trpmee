@extends('backend.layout.app')
@section('content')
<div class="container py-4">
    <h4>Create Package Destination Detail</h4>
    <form action="{{ route('package-details.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('backend.packagedestinationdetails.form')
    </form>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    $('.summernote').summernote({
        height: 300,                 // Set editor height
        minHeight: 150,              // Minimum height
        maxHeight: null,             // No max height
        focus: true,                 // Focus on editable area after init
        placeholder: 'Write your content here...',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'video', 'table', 'hr']],
            ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']]
        ],
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
        fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48', '64', '82', '150'],
        codeviewFilter: true,         // Clean HTML on code view
        codeviewIframeFilter: true,  // Extra HTML sanitization
        disableDragAndDrop: false,   // Enable image drag & drop
    });
});
</script>



@endsection
