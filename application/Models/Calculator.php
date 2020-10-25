<?php

namespace Application\Models;

use Application\Exceptions\DivideByZeroNotAllowedException;

class Calculator
{
    /** @var int */
    protected $firstNumber;

    /** @var int */
    protected $secondNumber;

    /**
     * Calculator constructor.
     * @param $firstNumber
     * @param $secondNumber
     */
    public function __construct($firstNumber, $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    /**
     * @return mixed
     */
    public function getFirstNumber()
    {
        return $this->firstNumber;
    }

    /**
     * @param mixed $firstNumber
     */
    public function setFirstNumber($firstNumber)
    {
        $this->firstNumber = $firstNumber;
    }

    /**
     * @return mixed
     */
    public function getSecondNumber()
    {
        return $this->secondNumber;
    }

    /**
     * @param mixed $secondNumber
     */
    public function setSecondNumber($secondNumber)
    {
        $this->secondNumber = $secondNumber;
    }

    /**
     * return sum of two numbers
     */
    public function sum()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    /**
     * return multiply of two numbers
     */
    public function multiply()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    /**
     * Return subtraction of two numbers in Calculator class
     * return float|int
     */
    public function subtraction()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    /**
     * Calculate the division of two numbers or throw exception if dividend is zero.
     * @return float|int
     * @throws DivideByZeroNotAllowedException
     */
    public function divide()
    {
        if ($this->secondNumber === 0) {
            throw new DivideByZeroNotAllowedException();
        }

        return (float) $this->firstNumber / $this->secondNumber;
    }
}
