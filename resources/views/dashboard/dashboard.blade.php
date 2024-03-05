@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mt-8">
            <h2 class="text-3xl font-bold">Dashboard</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
            <a href="{{ route('customers.index') }}" class="hover:no-underline">
                <div class="bg-white p-6 rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Customers</h3>
                    <p class="text-gray-600">Total: {{ $customerCount }}</p>
                </div>
            </a>
            <a href="{{ route('products.index') }}" class="hover:no-underline">
                <div class="bg-white p-6 rounded-lg shadow-md hover:bg-gray-100 transition duration-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Products</h3>
                    <p class="text-gray-600">Total: {{ $productCount }}</p>
                </div>
            </a>
        </div>
    </div>
@endsection
