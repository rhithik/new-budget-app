<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Take Control of Your Money</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li class="px-3">
                <a href="#">Logo</a>
            </li>
            <li class="px-3">
                <a href="#">Budgets</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li class="px-3">
                <a href="#">User/Username</a>
            </li>
            <li class="px-3">
                <a href="#">Login</a>
            </li>
            <li class="px-3">
                <a href="#">Register</a>
            </li>
        </ul>
    </nav>
    <h2 class="md:text-2xl xl:text-3xl font-bold mt-6 text-center underline">
        Let's Make a Budget!
    </h2>
    @yield('content')
</body> 
</html>