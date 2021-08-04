<?php

namespace App\Models;

use App\Observers\SaleObserver;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sale extends BaseModel
{
    protected static function boot()
    {
        parent::boot();

        parent::observe(SaleObserver::class);
    }

    public function product() : HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function user() : HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
