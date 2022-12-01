<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Numeric extends Validation
{
    protected $padChar = 0;
    protected $padDirection = STR_PAD_LEFT;

    public function validate($value) : bool
    {
        return $this->isValid = is_numeric($value) || empty($value);
    }

    public function clear($value) : String
    {
        return (int) $value . '';
    }
}