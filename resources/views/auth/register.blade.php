@extends('layouts.main')

@section('content')
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white p-8 rounded shadow-md w-80">
            <h2 class="text-xl font-bold mb-4">Register</h2>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="form-input w-full" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="form-input w-full" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="form-input w-full" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-input w-full"
                        required>
                </div>

                <div class="flex justify-between items-center mb-4">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</button>
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection
