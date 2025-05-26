@extends('layouts.app')

@section('content')
    <h1>Category: {{ $category->name }}</h1>
    <p>Created at: {{ $category->created_at->format('Y-m-d H:i:s') }}</p>
    <p>Updated at: {{ $category->updated_at->format('Y-m-d H:i:s') }}</p>
    <a href="{{ route('index') }}">Back to Categories</a>
@endsection
