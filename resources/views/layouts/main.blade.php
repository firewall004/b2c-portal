<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="B2C Web Portal">
    <link rel="icon" href="https://18pixels.com/img/07/18pixels-1.png" />
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-blue-950 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">B2C Web Portal</a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a></li>

                    @if (auth()->user())
                        <li><a href="{{ route('customers.index') }}" class="hover:underline">Customers</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:underline">Products</a></li>
                    @endif

                    @if (auth()->user() && auth()->user()->is_admin)
                        <li><a href="{{ route('users.index') }}" class="hover:underline">Users</a></li>
                    @endif
                    <li>
                        @auth
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="hover:underline">Login</a>
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="flex-grow container mx-auto py-8">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; 2024 B2C Web Portal. All rights reserved.
        </div>
    </footer>

</body>

</html>
