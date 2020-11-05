<?php

namespace Application\Tests;

use Application\Models\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * Test para comprobar la funcionalidad del metodo sum con enteros
     */
    public function testSum()
    {
        $calculator = new Calculator(1, 2);
        $this->assertEquals(3, $calculator->sum(1, 2), 'El resultado de 1 + 2 debe ser 3.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo sum con flotantes
     */
    public function testSumFloat()
    {
        $calculator = new Calculator(1.5, 2.4);
        $this->assertEquals(3.9, $calculator->sum(1.5, 2.4), 'El resultado de 1.5 + 2.4 debe ser 3.9');
    }

    /**
     * Test para comprobar la funcionalidad del metodo subtraction con enteros
     */
    public function testSubtraction()
    {
        $calculator = new Calculator(8, 3);
        $this->assertEquals(5, $calculator->subtraction(8, 3), 'El resultado de 8 - 3 debe ser 5.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo subtraction con flotantes
     */
    public function testSubtractionFloat()
    {
        $calculator = new Calculator(5.8, 3.7);
        $this->assertEquals(2.1, $calculator->subtraction(5.8, 3.7), 'El resultado de 5.8 - 3.7 debe ser 2.1.');
    }
}
