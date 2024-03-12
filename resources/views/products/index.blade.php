@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-semibold">Product List</h1>
            <div>
                <a href="{{ route('products.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Product</a>
                <a href="{{ route('products.export') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Download
                    Excel</a>
            </div>
        </div>

        <div class="mt-8">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->quantity }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->customer->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <button onclick="showDeleteConfirmation({{ $product->id }})"
                                    class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-8 rounded shadow-md w-80">
            <p class="text-xl mb-4">Are you sure you want to delete this product?</p>
            <div class="flex justify-end">
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
                <button onclick="hideDeleteConfirmation()"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        function showDeleteConfirmation(productId) {
            var modal = document.getElementById('deleteModal');
            modal.classList.remove('hidden');
            var form = document.getElementById('deleteForm');
            form.action = '/products/' + productId;
        }

        function hideDeleteConfirmation() {
            var modal = document.getElementById('deleteModal');
            modal.classList.add('hidden');
        }
    </script>
@endsection
