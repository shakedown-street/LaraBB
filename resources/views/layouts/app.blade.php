<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="{{ asset('lib/punkweb-ui/punkweb-ui.min.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="pw-container">
                <div class="flex align-center gap-4 py-4">
                    <a href=" {{ route('index') }}">Home</a>
                    <div class="flex-1"></div>
                    @guest
                    <div class="flex align-center gap-4">
                        <a class="pw-button sm primary ghost" href="{{ route('auth.register') }}">
                            Register
                        </a>
                        <a class="pw-button sm primary raised" href="{{ route('auth.login') }}">
                            Login
                        </a>
                    </div>
                    @endguest
                    @auth
                    <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button class="pw-button sm primary ghost" type="submit">Logout</button>
                    </form>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="pw-container">
            @yield('content')
        </div>
    </main>

    <footer>
    </footer>
</body>

</html>