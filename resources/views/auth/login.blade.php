@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen flex justify-center items-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                        required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                        required>
                </div>

                <div class="flex justify-between items-center mb-4">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">Login</button>
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection
