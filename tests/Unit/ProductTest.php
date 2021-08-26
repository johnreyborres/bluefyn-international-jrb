<?php

namespace Tests\Unit;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function commissionIsCorrect()
    {
        $product = Product::factory()->create([
            'cost' => 2.1,
            'commission' => 1.5,
        ]);

        $this->assertEquals(0.0315, $product->commission_amount);
    }
}
