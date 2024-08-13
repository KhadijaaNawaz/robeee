<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufacturingController extends Controller
{
    public function manufacture()
    {
        // Logic for manufacturing
        return view('manufacturing.manufacture');
    }
}
