<?php

namespace Application\models;

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
}
}
