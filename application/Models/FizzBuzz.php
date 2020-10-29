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

}

?>