<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesStoreRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules() : array
    {
        return [
        	'quantity' => 'required|integer|min:1|max:100000',
            'product_id' => 'required|exists:products,id',
        ];
    }
}