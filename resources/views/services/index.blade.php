@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary">Create New Services</a>
        <table class="table mt-3 table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>
                        <!-- Assuming $service->image contains the image path -->
                        <img src="{{ asset($service->image) }}" alt="Service Image" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>{{ $service->Description }}</td>
                    <td>
                        <a href="{{ route('services.show', $service->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
