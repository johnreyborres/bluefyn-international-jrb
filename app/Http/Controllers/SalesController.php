<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class SalesController extends Controller
{
    public function input() : View
    {
        return view('sales.input');
    }
}
