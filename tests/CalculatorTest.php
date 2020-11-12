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
        $this->assertEquals(3, $calculator->sum(), 'El resultado de 1 + 2 debe ser 3.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo sum con flotantes
     */
    public function testSumFloat()
    {
        $calculator = new Calculator(1.5, 2.4);
        $this->assertEquals(3.9, $calculator->sum(), 'El resultado de 1.5 + 2.4 debe ser 3.9');
    }

    /**
     * Test para comprobar la funcionalidad del metodo subtraction con enteros
     */
    public function testSubtraction()
    {
        $calculator = new Calculator(8, 3);
        $this->assertEquals(5, $calculator->subtraction(), 'El resultado de 8 - 3 debe ser 5.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo subtraction con flotantes
     */
    public function testSubtractionFloat()
    {
        $calculator = new Calculator(5.8, 3.7);
        $this->assertEquals(2.1, $calculator->subtraction(), 'El resultado de 5.8 - 3.7 debe ser 2.1.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo multiply con enteros
     */
    public function testMultiply()
    {
        $calculator = new Calculator(12, 3);
        $this->assertEquals(36, $calculator->multiply(), 'El resultado de 12 * 3 debe ser 36.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo multiply con flotantes
     */
    public function testMultiplyFloat()
    {
        $calculator = new Calculator(2.8, 8.7);
        $this->assertEquals(24.36, $calculator->multiply(), 'El resultado de 2.8 * 8.7 debe ser 24.36.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo divide con enteros
     */
    public function testDivide()
    {
        $calculator = new Calculator(24, 3);
        $this->assertEquals(8, $calculator->divide(), 'El resultado de 24 / 3 debe ser 8.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo divide con flotantes
     */
    public function testDivideFloat()
    {
        $calculator = new Calculator(58.8, 2.4);
        $this->assertEquals(24.5, $calculator->divide(), 'El resultado de 58.8 / 2.4 debe ser 24.5.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo square con enteros
     */
    public function testSquare()
    {
        $calculator = new Calculator(7);
        $this->assertEquals(49, $calculator->square(), 'El resultado de elevar al cuadrado 7 debe ser 49.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo square con flotantes
     */
    public function testsquareFloat()
    {
        $calculator = new Calculator(8.8);
        $this->assertEquals(77.44, $calculator->square(), 'El resultado de elevar al cuadrado 8.8 debe ser 77.44.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo cube con enteros
     */
    public function testCube()
    {
        $calculator = new Calculator(13);
        $this->assertEquals(2197, $calculator->cube(), 'El resultado de elevar al cubo 13 debe ser 2197.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo cube con flotantes
     */
    public function testCubeFloat()
    {
        $calculator = new Calculator(1.8);
        $this->assertEquals(5.832, $calculator->cube(), 'El resultado de elevar al cubo 1.8 debe ser 5.832.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo exponencial con enteros
     */
    public function testExponencial()
    {
        $calculator = new Calculator(10, 2);
        $this->assertEquals(100, $calculator->exponencial(), 'El resultado de elevar al 10 a la 2 debe ser 100.');
    }

    /**
     * Test para comprobar la funcionalidad del metodo exponencial con flotantes
     */
    public function testExponencialFloat()
    {
        $calculator = new Calculator(0.5, 2.0);
        $this->assertEquals(0.25, $calculator->exponencial(), 'El resultado de elevar 0.5 a la 1.5 debe ser 0.25.');
    }

    /**
     * Test para comprobar que la funcionalidad del metodo divide lanza un excepcion cuando se intenta dividir por cero
     */
    public function testDivisionByZeroThrowsException()
    {
        $calculator = new Calculator(5, 0);
        $this->expectExceptionMessage('secondNumber attribute can not be zero.');
        $calculator->divide();
    }

    /**
     * Test para comprobar la funcionalidad de la validacion secondNumber require en la funcion divide
     */
    public function testDivideValidationThrowsException()
    {
        $calculator = new Calculator(2, null);
        $this->expectExceptionMessage('secondNumber attribute is required.');
        $calculator->divide();
    }

    /**
     * Test para comprobar la funcionalidad de la validacion secondNumber require en la funcion sum
     */
    public function testSumValidationThrowsException()
    {
        $calculator = new Calculator(2, null);
        $this->expectExceptionMessage('secondNumber attribute is required.');
        $calculator->sum();
    }

    /**
     * Test para comprobar la funcionalidad de la validacion secondNumber require en la funcion multiply
     */
    public function testMultiplyValidationThrowsException()
    {
        $calculator = new Calculator(2, null);
        $this->expectExceptionMessage('secondNumber attribute is required.');
        $calculator->multiply();
    }

    /**
     * Test para comprobar la funcionalidad de la validacion secondNumber require en la funcion subtraction
     */
    public function testSubtractionValidationThrowsException()
    {
        $calculator = new Calculator(2, null);
        $this->expectExceptionMessage('secondNumber attribute is required.');
        $calculator->subtraction();
    }

    /**
     * Test para comprobar la funcionalidad de la validacion secondNumber require en la funcion exponencial
     */
    public function testExponencialValidationThrowsException()
    {
        $calculator = new Calculator(2, null);
        $this->expectExceptionMessage('secondNumber attribute is required.');
        $calculator->exponencial();
    }
}
