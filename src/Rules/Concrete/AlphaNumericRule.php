<?php

namespace Luur\Validator\Rules\Concrete;

use Luur\Validator\Rules\AbstractRule;

class AlphaNumericRule extends AbstractRule
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function passes($value)
    {
        if (!is_string($value) && !is_numeric($value)) {
            return false;
        }

        return preg_match('/^[0-9A-Za-z]+$/', $value);
    }
}
