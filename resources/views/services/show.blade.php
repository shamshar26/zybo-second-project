@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $services->title }}</h1>
      
        <img src="{{ asset($services->image) }}" alt="{{ $services->title }}">
       
    </div>
@endsection