<?php

namespace App\Models;

use App\Observers\SaleObserver;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends BaseModel
{
    protected $guarded = [
        'commission',
    ];

    protected static function boot()
    {
        parent::boot();

        parent::observe(SaleObserver::class);
    }

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
