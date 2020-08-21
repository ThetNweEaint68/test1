@extends('layouts.app')

@section('content')
<div id="page" class="container">
    <h1>Upload File</h1>
    <form method="POST" action="{{ route('resource.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="file" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control">
        </div>
        @foreach($resources as $resource)
        <img src="{{ asset('/storage/' . $resource->id)}}" class="img-thumbnail" alt="Responsive image">
        @endforeach
    </form>
</div>
@endsection