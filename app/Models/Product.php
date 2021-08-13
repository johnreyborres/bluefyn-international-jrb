<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends BaseModel
{
    public function getCommissionAmountAttribute() : float
    {
        return $this->cost * $this->commission;
    }

    public function sales() : HasMany
    {
        return $this->hasMany(Sale::class, 'product_id', 'id');
    }
}
