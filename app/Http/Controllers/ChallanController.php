<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChallanController extends Controller
{
    public function manualChallan()
    {
        // Logic for manual challan
        return view('orders.manual_challan');
    }
}
