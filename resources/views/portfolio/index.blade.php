@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Portfolio Images</h1>
        <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Create Portfolio Image</a>
        <table class="table mt-3 table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portfolioImages as $portfolioImage)
                <tr>
                    <td>{{ $portfolioImage->title }}</td>
                    <td>{{ $portfolioImage->image }}</td>
                    <td>
                        <a href="{{ route('portfolio.show', $portfolioImage->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('portfolio.edit', $portfolioImage->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('portfolio.destroy', $portfolioImage->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this portfolio image?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection