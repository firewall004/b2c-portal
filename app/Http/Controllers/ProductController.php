<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('products.create', compact('customers'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $customer)
    {
        return view('products.edit', compact('customer'));
    }

    public function update(Request $request, Product $customer)
    {
        $customer->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $customer)
    {
        $customer->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
