<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Numeric extends Validation
{

    public function validate($value) : bool
    {
        return is_numeric($value) || empty($value);
    }
}