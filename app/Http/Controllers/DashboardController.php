<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customerCount = Customer::count();
        $productCount = Product::count();

        return view('dashboard.dashboard', compact('customerCount', 'productCount'));
    }
}
