<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrmController extends Controller
{
    public function crm()
    {
        return view('crm.crm_index');
    }
}
