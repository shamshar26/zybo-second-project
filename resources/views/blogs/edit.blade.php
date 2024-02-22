@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit blog Page</h1>
        <form action="{{ route('blogs.update', $services->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $services->title }}">
            </div>
            
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="{{ asset($services->image) }}" alt="{{ $services->title }}" style="width: 200px;">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection