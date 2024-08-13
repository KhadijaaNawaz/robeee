<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        // Logic to display sub-categories
        return view('product_management.sub_category');
    }

    public function subSubCategory()
    {
        // Logic to display sub-sub-categories
        return view('product_management.sub_sub_category');
    }
}

