<?php 

namespace Application\Models;

use Application\Traits\ValidateCalculatorNumberTrait;

class FizzBuzz{

    use ValidateCalculatorNumberTrait;

    /** @var int */
    protected $max_number;

    /**
     * FizzBuzz constructor.
     * @param int $number
     */
    public function __construct(int $max_number)
    {
        $this->max_number = $max_number;
    }

    /**
     * @return mixed
     */
    public function getMaxNumber()
    {
        return $this->max_number;
    }

    /**
     * @param mixed $number
     */
    public function setMaxNumber($max_number)
    {
        $this->max_number = $max_number;
    }

    /**
     * function is_fizz_buzz.
     * return Fizz if $n is multiple of 3
     * return Buzz if $n is multiple of 5
     * return FizzBuzz if $n is multiple of both 3 and 5
     * return the number if $n isen't a multiple of 3 or 5 
     */
    function is_fizz_buzz($n){

        $output = '';
        
            switch(true){

                case($n % 15 === 0):
                    $output .= "FizzBuzz"."\n";
                    break;
        
                case($n % 3 === 0 ):
                    $output .= "Fizz"."\n";
                    break;
        
                case($n % 5 === 0 ):
                    $output .= "Buzz"."\n";
                    break;
        
                default:
                    $output .= $n."\n";
                    break;
            }
        
        return $output;
    }

}

?>