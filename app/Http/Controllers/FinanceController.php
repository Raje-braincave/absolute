<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function finance()
    {
        return view('finance.finance_index');
    }
}
