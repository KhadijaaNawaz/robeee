<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function materialsPurchase()
    {
        // Logic for materials purchase
        return view('purchase_management.materials');
    }
}
