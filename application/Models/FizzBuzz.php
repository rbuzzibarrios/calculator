<?php

namespace Application\Models;

use Application\Traits\ValidateCalculatorNumberTrait;

class FizzBuzz
{
    use ValidateCalculatorNumberTrait;

    /** @var int */
    protected $maxNumber;

    /**
     * FizzBuzz constructor.
     * @param int $maxNumber
     */
    public function __construct(int $maxNumber)
    {
        $this->maxNumber = $maxNumber;
    }

    /**
     * @return mixed
     */
    public function getMaxNumber()
    {
        return $this->maxNumber;
    }

    /**
     * @param mixed $maxNumber
     */
    public function setMaxNumber($maxNumber)
    {
        $this->maxNumber = $maxNumber;
    }

    /**
     * function is_fizz_buzz.
     * return Fizz if $n is multiple of 3
     * return Buzz if $n is multiple of 5
     * return FizzBuzz if $n is multiple of both 3 and 5
     * return the number if $n isen't a multiple of 3 or 5
     */
    public function isFizzBuzz($number)
    {
        $output = '';
        switch (true) {
                case($number % 15 === 0):
                    $output .= "FizzBuzz\n";
                    break;

                case($number % 3 === 0):
                    $output .= "Fizz\n";
                    break;

                case($number % 5 === 0):
                    $output .= "Buzz\n";
                    break;

                default:
                    $output .= $number."\n";
                    break;
            }

        return $output;
    }

    /**
     * function run.
     * return a list with results of is_fizz_buzz function
     * $maxNum is the length of the array
     */
    public function run()
    {
        $foutput = '';
        $this->validate(['maxNumber' => ['required', 'less_than_zero']]);

        for ($i = 1; $i <= $this->maxNumber; $i++) {
            $foutput .= $this->isFizzBuzz($i);
        }

        return $foutput;
    }
}
