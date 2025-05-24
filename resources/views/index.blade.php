@extends('layouts.app')

@section('content')
<h1>Welcome to the Index Page</h1>
<p>This is the main landing page.</p>

@auth
<p>You are logged in as {{ Auth::user()->email }}.</p>
@endauth
@endsection