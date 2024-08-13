<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function manualInvoice()
    {
        // Logic for manual invoice
        return view('orders.manual_invoice');
    }
}

