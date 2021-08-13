<?php

namespace App\Observers;

use App\Models\Sale;

class SaleObserver
{
    public function saving(Sale $saving)
    {
        $saving->cost = optional($saving->product)->cost ?? 0;
        $saving->commission = $saving->cost;
    }
}
