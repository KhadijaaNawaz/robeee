<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index()
    {
        // Logic to display quotations
        return view('quotations.index');
    }
}

