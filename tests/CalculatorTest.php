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
     * Test para comprobar la funcionalidad del objeto
     * @test
     */
    public function testSum()
    {
        $calculator = new Calculator(1, 2);
        $this->assertEquals( 3, $calculator->sum( 1, 2 ), 'El resultado de 1 + 2 debe ser 3.' );
    }
}