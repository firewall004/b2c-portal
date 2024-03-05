<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Product::with('customer')->get()->map(function ($product) {
            return [
                'ID' => $product->id,
                'Name' => $product->name,
                'Customer' => $product->customer->name,
                'Quantity' => $product->quantity,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Customer',
            'Quantity',
        ];
    }
}
