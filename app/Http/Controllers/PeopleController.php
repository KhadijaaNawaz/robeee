<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function parties()
    {
        // Logic for parties
        return view('people_management.parties');
    }

    public function manufacturer()
    {
        // Logic for manufacturers
        return view('people_management.manufacturer');
    }

    public function supplier()
    {
        // Logic for suppliers
        return view('people_management.supplier');
    }

    public function vendor()
    {
        // Logic for vendors
        return view('people_management.vendor');
    }

    public function employee()
    {
        // Logic for employees
        return view('people_management.employee');
    }
}
