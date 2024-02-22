
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Banner Images</h1><br>
        <a href="{{ route('banner-images.create') }}" class="btn btn-primary">Create New Banner Image</a>
        <table class="table mt-3 table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bannerImages as $bannerImage)
                <tr>
                    <td>{{ $bannerImage->title }}</td>
                    <td>{{ $bannerImage->image }}</td>
                    <td>
                        <a href="{{ route('banner-images.show', $bannerImage->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('banner-images.edit', $bannerImage->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('banner-images.destroy', $bannerImage->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger bg-danger" onclick="return confirm('Are you sure you want to delete this banner image?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection