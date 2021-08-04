<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Sale;
use Tests\TestCase;

class SaleTest extends TestCase
{
    /** @test */
    public function costIsCalculatedCorrectly()
    {
        $product = Product::factory()->create([
            'cost' => 2.1,
            'commission' => 1.5,
        ]);

        $sale = Sale::factory()->create([
            'product_id' => $product->id,
        ]);

        $this->assertEquals((float) number_format($product->cost * $sale->quantity, 2), $sale->cost);
    }
}
