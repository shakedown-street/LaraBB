@extends('layouts.app')

@section('content')
<h1>Welcome to the Index Page</h1>
<p>This is the main landing page.</p>

<ul>
    @foreach ($categories as $category)
    <li>
        <a href="{{ route('categories.show', $category->id) }}">
            {{ $category->name }}
        </a>
    </li>
    @endforeach
</ul>
@endsection