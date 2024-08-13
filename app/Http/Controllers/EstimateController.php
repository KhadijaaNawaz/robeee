<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimateController extends Controller
{
    public function estimate()
    {
        // Logic for estimates
        return view('quotations.estimate');
    }
}
