@extends('backend.layout.app')
@section('content')
<div class="container py-4">
    <h4>Create Package Destination</h4>

    <form action="{{ route('pakagedestinations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('backend.packagedestination.form')
    </form>
</div>
@endsection
