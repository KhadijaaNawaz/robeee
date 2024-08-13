<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function inStock()
    {
        // Logic for in-stock products
        return view('products.in_stock');
    }
}
