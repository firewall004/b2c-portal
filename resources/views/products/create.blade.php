@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Add New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name"
                    class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                    required>
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity</label>
                <input type="number" id="quantity" name="quantity"
                    class="form-input w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                    required>
            </div>
            <div class="mb-4">
                <label for="customer_id" class="block text-gray-700 text-sm font-bold mb-2">Customer</label>
                <select id="customer_id" name="customer_id"
                    class="form-select w-full bg-gray-100 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 px-3 py-2"
                    required>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                Product</button>
        </form>
    </div>
@endsection
