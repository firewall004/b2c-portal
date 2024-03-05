<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('products.create', compact('customers'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'quantity' => 'required|integer|min:0',
                'customer_id' => 'required|exists:customers,id',
            ]);

            DB::beginTransaction();

            Product::create($validatedData);

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            throw $th;
        }
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
