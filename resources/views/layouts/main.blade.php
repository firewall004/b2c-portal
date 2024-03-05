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
            <nav class="flex items-center space-x-4">
                <ul class="flex space-x-4">
                    <li><a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a></li>

                    @if (auth()->user())
                        <li><a href="{{ route('customers.index') }}" class="hover:underline">Customers</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:underline">Products</a></li>
                    @endif

                    @if (auth()->user() && auth()->user()->is_admin)
                        <li><a href="{{ route('users.index') }}" class="hover:underline">Users</a></li>
                    @endif
                </ul>
                <div>
                    @auth
                        <div class="flex items-center">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit"
                                    class="text-blue-300 hover:text-blue-100 focus:outline-none ml-2 flex items-center">
                                    <div class="rounded-full bg-gray-200 w-10 h-10 flex items-center justify-center mr-2">
                                        <span
                                            class="text-blue-500 font-bold text-lg">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                    </div>
                                    <span class="mr-2">Logout</span>
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-blue-300 hover:text-blue-100 hover:underline focus:outline-none">Login</a>
                    @endauth
                </div>
            </nav>
        </div>
    </header>


    <div class="flex-grow container mx-auto py-8">

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-2 rounded relative"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path fill-rule="evenodd"
                            d="M14.354 5.354a2 2 0 0 0-2.828 0L10 7.172 7.172 5.354a2 2 0 1 0-2.828 2.828L7.172 10l-2.828 2.828a2 2 0 1 0 2.828 2.828L10 12.828l2.828 2.828a2 2 0 1 0 2.828-2.828L12.828 10l2.828-2.828a2 2 0 0 0 0-2.828z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </div>
        @endif


        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; 2024 B2C Web Portal. All rights reserved.
        </div>
    </footer>

</body>

</html>
