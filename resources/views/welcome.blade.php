<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5;
            background-color: #f3f4f6;
            color: #111827;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://laravel.com/assets/img/backgrounds/hero.jpg');
            background-size: cover;
            background-position: center;
        }

        .welcome-message {
            position: absolute;
            top: 50px;
            text-align: center;
            width: 100%;
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #f87171;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 10px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #e53e3e;
        }
    </style>
</head>
<body>
    <div class="welcome-message">
        <p>Bienvenido a la Academia Ceica</p>
    </div>

    <div class="button-container">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
