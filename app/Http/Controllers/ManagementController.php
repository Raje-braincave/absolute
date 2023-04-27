<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function serviceindex()
    {
        return view('servicemanagement.index_servicemanagement');
    }
}
