@extends('layouts.main')

@section('title', 'Customers')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-semibold">Customer List</h1>
            <div>

                <a href="{{ route('customers.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Customer</a>
                <a href="{{ route('customers.export') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Download
                    Excel</a>
            </div>
        </div>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($customers as $customer)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $customer->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $customer->age }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $customer->phone }}</td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('customers.edit', $customer->id) }}"
                                class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
