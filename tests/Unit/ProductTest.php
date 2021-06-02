<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    function testProductHasName()
    {
        $product = new Product("Fallout 4",45);
        $this->assertEquals('Fallout 4', $product->name());
    }

    function testProductHasCost()
    {
        $product = new Product("Fallout 4",59);
        $this->assertEquals(59, $product->cost());
    }
}
