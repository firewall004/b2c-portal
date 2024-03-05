<?php

namespace App\Http\Controllers;

use App\Exports\CustomersExport;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class CustomerController extends Controller
{
    public function index()
    {
        try {
            $customers = Customer::all();
            return view('customers.index', compact('customers'));
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            throw $th;
        }
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'age' => 'required|integer|min:18',
                'phone' => 'required|string|max:20',
            ]);

            DB::beginTransaction();

            Customer::create($validatedData);

            DB::commit();
            return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
        } catch (Throwable $th) {
            DB::rollBack();
            Log::error($th->getMessage());
            throw $th;
        }
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }

    public function export()
    {
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }
}
