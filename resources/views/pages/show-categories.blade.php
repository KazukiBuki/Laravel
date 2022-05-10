@extends('main')
@section('content')

<ul>
    <h1>Categories</h1>
    @foreach ($categories as $category)
        
    <li>{{ $category->title }}</li>
    @endforeach
</ul>

@endsection