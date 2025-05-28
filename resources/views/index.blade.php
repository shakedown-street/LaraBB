@extends('layouts.app')

@section('content')
    <h1>Welcome to the Index Page</h1>
    <p>This is the main landing page.</p>

    @foreach ($categories as $category)
        <h2>
            <a href="{{ route('categories.show', $category->id) }}">
                {{ $category->name }}
            </a>
        </h2>
        <ul>
            @foreach ($category->subcategories as $subcategory)
                <li>
                    <a>
                        {{ $subcategory->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endforeach
@endsection
