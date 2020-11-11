<?php 

namespace Application\Tests;

use Application\Models\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * Test para comprobar la funcinalidad del metodo isFizzBuzz con 3
     */
    public function testIsFizzBuzzThree()
    {
        $fizzbuzz = new FizzBuzz(3);
        $this->assertEquals("Fizz\n", $fizzbuzz->isFizzBuzz(3), 'Retorna Fizz si el numero es divisible por 3');
    }

    /**
     * Test para comprobar la funcinalidad del metodo isFizzBuzz con 5
     */
    public function testIsFizzBuzzFive()
    {
        $fizzbuzz = new FizzBuzz(5);
        $this->assertEquals("Buzz\n", $fizzbuzz->isFizzBuzz(5), 'Retorna Buzz si el numero es divisible por 5');
    }

    /**
     * Test para comprobar la funcinalidad del metodo isFizzBuzz con 5
     */
    public function testIsFizzBuzzFifteen()
    {
        $fizzbuzz = new FizzBuzz(15);
        $this->assertEquals("FizzBuzz\n", $fizzbuzz->isFizzBuzz(15), 'Retorna Buzz si el numero es divisible por 5');
    }
}