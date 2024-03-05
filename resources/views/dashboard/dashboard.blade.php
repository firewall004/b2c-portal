@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mt-8">
            <h2 class="text-2xl font-bold">Dashboard</h2>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-8">
            <div class="bg-white p-4 rounded shadow-md">
                <h3 class="text-lg font-semibold">Customers</h3>
                <p class="text-gray-600">Total: {{ $customerCount }}</p>
            </div>
            <div class="bg-white p-4 rounded shadow-md">
                <h3 class="text-lg font-semibold">Products</h3>
                <p class="text-gray-600">Total: {{ $productCount }}</p>
            </div>
        </div>
    </div>
@endsection
