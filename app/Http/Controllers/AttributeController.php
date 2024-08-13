<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        // Logic to display product attributes
        return view('product_management.attribute');
    }
}
