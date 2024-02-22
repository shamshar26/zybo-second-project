@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $portfolioImage->title }}</h1>
      
        <img src="{{ asset($portfolioImage->image) }}" alt="{{ $portfolioImage->title }}">
       
    </div>
@endsection