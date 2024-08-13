<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        // Logic to display product variants
        return view('product_management.variant');
    }
}
