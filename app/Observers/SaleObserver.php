<?php

namespace App\Observers;

use App\Models\Sale;

class SaleObserver
{
    public function saving(Sale $saving)
    {
        $saving->cost = (optional($saving->product)->cost ?? 0) * $saving->quantity;
        $saving->commission = (optional($saving->product)->commission_amount ?? 0) * $saving->quantity;
    }
}
