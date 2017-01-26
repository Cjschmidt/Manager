<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DashboardController extends Controller
{

    protected function getDashboard(Request $request)
    {
        return view('backend.dashboard.dashboard');
    }

}
