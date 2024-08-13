<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function paySlip()
    {
        // Logic for pay slip
        return view('accounts.pay_slip');
    }

    public function credit()
    {
        // Logic for credit
        return view('accounts.credit');
    }

    public function debit()
    {
        // Logic for debit
        return view('accounts.debit');
    }

    public function due()
    {
        // Logic for due
        return view('accounts.due');
    }

    public function fundTransfer()
    {
        // Logic for fund transfer
        return view('accounts.fund_transfer');
    }

    public function accountPurpose()
    {
        // Logic for account purpose
        return view('accounts.account_purpose');
    }
}
