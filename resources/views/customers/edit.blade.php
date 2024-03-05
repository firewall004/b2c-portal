@extends('layouts.main')

@section('title', 'Edit Customer')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Edit Customer</h1>

        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name"
                    class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                    value="{{ $customer->name }}" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Age</label>
                <input type="number" id="age" name="age"
                    class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                    value="{{ $customer->age }}" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                <input type="text" id="phone" name="phone"
                    class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                    value="{{ $customer->phone }}" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                Customer</button>
        </form>
    </div>
@endsection
