<?php
/**
 * Created by PhpStorm.
 * User: JEDV
 * Date: 04/11/2020
 * Time: 22:19
 */

namespace Application\Tests;
use Application\Models\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * Test para comprobar la funcionalidad del metodo sum con enteros
     * @test
     */
    public function testSum()
    {
        $calculator = new Calculator(1, 2);
        $this->assertEquals( 3, $calculator->sum( 1, 2 ), 'El resultado de 1 + 2 debe ser 3.' );
    }

    /**
     * Test para comprobar la funcionalidad del metodo sum con flotantes
     * @test
     */
    public function testSumFloat()
    {
        $calculator = new Calculator(1.5, 2.4);
        $this->assertEquals( 3.9, $calculator->sum( 1.5, 2.4 ), 'El resultado de 1.5 + 2.4 debe ser 3.9' );
    }
}