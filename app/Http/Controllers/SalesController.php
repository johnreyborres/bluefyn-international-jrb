<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SalesStoreRequest;

class SalesController extends Controller
{
    public function create() : View
    {
        $products = Product::orderBy('name')->pluck('name', 'id');

        return view('sales.create')->with(['products' => $products]);
    }

    public function store(SalesStoreRequest $request) : RedirectResponse
    {
        Sale::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('dashboard');
    }
}
