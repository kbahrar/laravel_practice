<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posty</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('home') }}" class="p-3">HOME</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">DASHBOARD</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">POST</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="#" class="p-3">{{ auth()->user()->username }} </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="p-3">LOGOUT</a>
                </li>
            @endauth
            @guest    
                <li>
                    <a href="{{ route('login') }}" class="p-3">LOGIN</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">REGISTER</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>