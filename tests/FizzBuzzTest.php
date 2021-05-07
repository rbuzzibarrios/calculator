<?php

namespace Application\Tests;

use Application\Models\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * Test para comprobar la funcinalidad del metodo isFizzBuzz con 3 y 21.
     */
    public function testReturnFizzIfMultipleOfThree()
    {
        $fizzbuzz = new FizzBuzz(3);
        $this->assertEquals("Fizz\n", $fizzbuzz->isFizzBuzz(3), 'Retorna Fizz si 3 es divisible por 3');
        $fizzbuzz = new FizzBuzz(21);
        $this->assertEquals("Fizz\n", $fizzbuzz->isFizzBuzz(21), 'Retorna Fizz si 21 es divisible por 3');
    }

    /**
     * Test para comprobar la funcinalidad del método isFizzBuzz con 5 y 55
     */
    public function testReturnBuzzIfMultipleOfFive()
    {
        $fizzbuzz = new FizzBuzz(5);
        $this->assertEquals("Buzz\n", $fizzbuzz->isFizzBuzz(5), 'Retorna Buzz si 5 es divisible por 5');
        $fizzbuzz = new FizzBuzz(55);
        $this->assertEquals("Buzz\n", $fizzbuzz->isFizzBuzz(55), 'Retorna Buzz si 55 es divisible por 5');
    }

    /**
     * Test para comprobar la funcinalidad del metodo isFizzBuzz con 15 y 30
     */
    public function testReturnFizzBuzzIfMultipleOfThreeAndFive()
    {
        $fizzbuzz = new FizzBuzz(15);
        $this->assertEquals("FizzBuzz\n", $fizzbuzz->isFizzBuzz(15), 'Retorna FizzBuzz si 15 es divisible por 3 y 5');
        $fizzbuzz = new FizzBuzz(30);
        $this->assertEquals("FizzBuzz\n", $fizzbuzz->isFizzBuzz(30), 'Retorna FizzBuzz si 30 es divisible por 3 y 5');
    }

    /**
     * Test para comprobar la funcinalidad del metodo isFizzBuzz con 2 y 62
     */
    public function testReturnNumberIfNotMultipleOfThreeOrFive()
    {
        $fizzbuzz = new FizzBuzz(2);
        $this->assertEquals("2\n", $fizzbuzz->isFizzBuzz(2), 'Retorna el # si no es divisible por 3 o 5');
        $fizzbuzz = new FizzBuzz(62);
        $this->assertEquals("62\n", $fizzbuzz->isFizzBuzz(62), 'Retorna el # si no es divisible por 3 o 5');
    }

    /**
     * Test para comprobar la funcinalidad del metodo run con 15
     */
    public function testRun()
    {
        $fizzbuzz = new FizzBuzz(15);
        $this->assertEquals(
            "1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz\n11\nFizz\n13\n14\nFizzBuzz\n",
            $fizzbuzz->run(),
            'Retorna cadena conformada con resultados de aplicar isFizzBuzz a un array'
        );
    }

    /**
     * Test para comprobar la funcionalidad de la validacion maxNumber no puede ser menor que cero
     */
    public function testRunValidationThrowsException()
    {
        $calculator = new FizzBuzz(-2);
        $this->expectExceptionMessage('maxNumber attribute can not lesser than zero.');
        $calculator->run();
    }
}
