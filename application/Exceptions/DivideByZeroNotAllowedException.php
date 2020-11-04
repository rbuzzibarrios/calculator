<?php

namespace Application\Exceptions;

class DivideByZeroNotAllowedException extends \Exception
{
    protected $message = 'Divide by zero is not allowed';
}
