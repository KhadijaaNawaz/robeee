<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Logic to display products
        return view('products.index');
    }

    public function allProducts()
    {
        // Logic to display all products
        return view('product_management.all_products');
    }
}
