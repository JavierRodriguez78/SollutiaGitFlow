<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testSuma(){
        $resultado = Calculadora::suma(5,4);
        $this->assertEquals(9,$resultado);
    }

    public function testResta() {
        $resultado = Calculadora::resta(3,2);
        $this->assertEquals(1,$resultado);
    }

}
