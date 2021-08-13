<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class SalesController extends Controller
{
    public function input() : View
    {
        return view('sales.input')->with([
            'products' => Product::pluck('name', 'id'),
        ]);
    }

    // @TODO: We will eventually allow user entry
}
