<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function sales()
    {
        // Logic for sales report
        return view('reports.sales');
    }

    public function itemsWiseSales()
    {
        // Logic for items-wise sales report
        return view('reports.items_wise_sales');
    }

    public function purchase()
    {
        // Logic for purchase report
        return view('reports.purchase');
    }

    public function dayBook()
    {
        // Logic for day book report
        return view('reports.day_book');
    }

    public function partyReport()
    {
        // Logic for party report
        return view('reports.party_report');
    }

    public function manufacturingReport()
    {
        // Logic for manufacturing report
        return view('reports.manufacturing_report');
    }

    public function manufacturerReport()
    {
        // Logic for manufacturer report
        return view('reports.manufacturer_report');
    }

    public function stockReport()
    {
        // Logic for stock report
        return view('reports.stock_report');
    }

    public function lowStockReport()
    {
        // Logic for low stock report
        return view('reports.low_stock_report');
    }

    public function expenseReport()
    {
        // Logic for expense report
        return view('reports.expense_report');
    }

    public function profitLossReport()
    {
        // Logic for profit-loss report
        return view('reports.profit_loss_report');
    }

    public function accountReport()
    {
        // Logic for account report
        return view('reports.account_report');
    }

    public function vendorReport()
    {
        // Logic for vendor report
        return view('reports.vendor_report');
    }

    public function quotationReport()
    {
        // Logic for quotation report
        return view('reports.quotation_report');
    }

    public function employeeReport()
    {
        // Logic for employee report
        return view('reports.employee_report');
    }
}
