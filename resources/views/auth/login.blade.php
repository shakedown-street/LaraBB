@extends('layouts.app')

@section('content')
<div class="pw-card">
    <div class="pw-card-header">Login</div>
    <div class="pw-card-content">
        <form class="pw-form" action="{{ route('auth.login') }}" method="POST">
            @csrf
            <div class="pw-form-group">
                <label class="pw-input-label" for="email">Email</label>
                <input class="pw-input fluid" type="email" id="email" name="email" required>
            </div>
            <div class="pw-form-group">
                <label class="pw-input-label" for="password">Password</label>
                <input class="pw-input fluid" type="password" id="password" name="password" required>
            </div>
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="pw-form-actions">
                <button class="pw-button primary raised" type="submit">Login</button>
            </div>
            <p>Don't have an account? <a href="{{ route('auth.register') }}">Register here</a></p>
        </form>
    </div>
</div>
@endsection