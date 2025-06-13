@extends('backend.layout.app')
@section('content')
<div class="container py-4">
    <h4>Edit Package Destination</h4>

    <form action="{{ route('pakagedestinations.update', $pakageDestination->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('backend.packagedestination.form', ['edit' => true])
    </form>
</div>
@endsection
