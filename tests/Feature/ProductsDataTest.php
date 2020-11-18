<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsDataTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_products_with_name()
    {
        $response = $this->get('productos/hp-SD-512gb/EstadoSólido');
        $response->assertStatus(200);
        $response->assertSee("SKU: hp-SD-512gb nombre: EstadoSólido");
    }
    
    public function test_products_without_name()
    {
        $response = $this->get('productos/hp-SD-512gb/EstadoSólido');
        $response->assertStatus(200);
        $response->assertSee("SKU: producto sin nombre");
    }
}
