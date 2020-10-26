<?php

namespace Application\Models;

use Application\Traits\ValidateCalculatorNumberTrait;

class Calculator
{
    use ValidateCalculatorNumberTrait;

    /** @var float */
    protected $firstNumber;

    /**
     * @var float|null $secondNumber
     */
    protected $secondNumber = null;

    /**
     * Calculator constructor.
     * @param float $firstNumber
     * @param float|null $secondNumber
     */
    public function __construct(float $firstNumber, float $secondNumber = null)
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
     * @return float|null
     * @throws \Exception
     */
    public function sum()
    {
        $this->validate(['secondNumber' => ['required']]);

        return $this->firstNumber + $this->secondNumber;
    }

    /**
     * return multiply of two numbers
     * @return float|int
     * @throws \Exception
     */
    public function multiply()
    {
        $this->validate(['secondNumber' => ['required']]);

        return $this->firstNumber * $this->secondNumber;
    }

    /**
     * Return subtraction of two numbers in Calculator class
     * @return float|null
     * @throws \Exception
     */
    public function subtraction()
    {
        $this->validate(['secondNumber' => ['required']]);

        return $this->firstNumber - $this->secondNumber;
    }

    /**
     * Calculate the division of two numbers or throw exception if dividend is zero.
     * @return float|int
     * @throws \Exception
     */
    public function divide()
    {
        $this->validate(['secondNumber' => ['required', 'not_equal_zero']]);

        return (float) $this->firstNumber / $this->secondNumber;
    }

    /**
     * Return square of $firstNumber in Calculator class
     * return float|int
     */
    public function square()
    {
        return $this->firstNumber * $this->firstNumber;
    }

    /**
     * Return cube of $firstNumber in Calculator class
     * return float|int
     */
    public function cube()
    {
        return $this->firstNumber *  $this->firstNumber * $this->firstNumber;
    }

    /**
     * Return result of raising $firstNumber to power $seconNumber in Calculator class
     * return float|int
     * PHP 5.6+ required
     */
    public function exp()
    {
        return $this->firstNumber ** $this->secondNumber;
    }
}
