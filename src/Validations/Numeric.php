<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Numeric extends Validation
{

    public function validate() : bool
    {
        return is_numeric($this->value);
    }
}