<?php

namespace Application\Traits;

trait ValidateCalculatorNumberTrait
{
    public function validate($rules)
    {
        foreach ($rules as $attributeNumber => $validations) {
            if (in_array('required', $validations) && is_null($this->{$attributeNumber})) {
                throw new \Exception("{$attributeNumber} attribute is required.");
            }

            if (in_array('not_equal_zero', $validations) && $this->{$attributeNumber} === 0) {
                throw new \Exception("{$attributeNumber} attribute can not be zero.");
            }

            if (in_array('less_than_zero', $validations) && $this->{$attributeNumber} < 0) {
                throw new \Exception("{$attributeNumber} attribute can not lesser than zero.");
            }
        }
    }
}
