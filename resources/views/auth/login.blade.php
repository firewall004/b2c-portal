@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white p-8 rounded shadow-md w-80">
            <h2 class="text-xl font-bold mb-4">Login</h2>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="form-input w-full" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="form-input w-full" required>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</button>
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
                </div>
            </form>
        </div>
    </div>
@endsection
