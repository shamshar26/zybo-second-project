@extends('layouts.app')

@section('content')
    <div class="container"><br><br>
        <h1>{{ $bannerImage->title }}</h1><br><br>
      
        <img src="{{ \Storage::url($bannerImage->image) }}" alt="{{ $bannerImage->title }}">
       
    </div>
@endsection