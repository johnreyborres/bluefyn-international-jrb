<?php

namespace App\Models;

class Product extends BaseModel
{
    public function getCommissionAmountAttribute() : float
    {
        return $this->cost * $this->commission;
    }
}
