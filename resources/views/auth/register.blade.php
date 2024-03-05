@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <div class="min-h-screen flex justify-center items-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name"
                        class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                        required>
                </div>
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
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                        required>
                </div>

                <div class="flex justify-between items-center mb-4">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">Register</button>
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
