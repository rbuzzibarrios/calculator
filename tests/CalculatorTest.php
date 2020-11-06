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

    /**
     * Test para comprobar la funcionalidad del metodo multiply con enteros
     */
    public function testMultiply()
    {
        $calculator = new Calculator(12, 3);
        $this->assertEquals(36, $calculator->multiply(12, 3), 'El resultado de 12 * 3 debe ser 36.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo multiply con flotantes
     */
    public function testMultiplyFloat()
    {
        $calculator = new Calculator(2.8, 8.7);
        $this->assertEquals(24.36, $calculator->multiply(2.8, 8.7), 'El resultado de 2.8 * 8.7 debe ser 24.36.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo divide con enteros
     */
    public function testDivide()
    {
        $calculator = new Calculator(24, 3);
        $this->assertEquals(8, $calculator->divide(24, 3), 'El resultado de 24 / 3 debe ser 8.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo divide con flotantes
     */
    public function testDivideFloat()
    {
        $calculator = new Calculator(58.8, 2.4);
        $this->assertEquals(24.5, $calculator->divide(58.8, 2.4), 'El resultado de 58.8 / 2.4 debe ser 24.5.');
    }
}
