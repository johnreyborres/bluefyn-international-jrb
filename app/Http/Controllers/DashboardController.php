<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index() : View
    {
        $totalCommissions = auth()->user()->sales->sum('commission');

        return view('dashboard')->with(['totalCommissions' => $totalCommissions]);
    }
}
