@extends('layouts.main')

@section('content')
    <div class="container mx-auto">

        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-semibold mb-4">Add Customer</h1>
            <a href="{{ route('customers.index') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">All Customers</a>
        </div>

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="form-input w-full">
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Age</label>
                <input type="number" id="age" name="age" class="form-input w-full">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-input w-full">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                Customer</button>
        </form>
    </div>
@endsection
