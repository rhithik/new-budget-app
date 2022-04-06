<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Take Control of Your Money</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-700">
    <nav class="p-6 bg-success flex justify-between text-gray-900">
        <ul class="flex items-center">
            <li class="px-3">
                <a href="/home">Logo</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li class="px-3">
                    <a href="">{{ auth()->user()->name }}</a>
                </li>
                <li class="px-3">
                    <a href="{{ route('budgets') }}">Budgets</a>
                </li>
                <li class="px-3">
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline"> 
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            
            @guest
                <li class="px-3">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="px-3">
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    <h2 class="md:text-2xl xl:text-3xl font-bold mt-6 text-center underline">
        Let's Make a Budget!
    </h2>
    @yield('content')
</body> 
</html>