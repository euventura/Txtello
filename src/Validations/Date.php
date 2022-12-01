<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Date extends Validation
{

    public function validate($value) : bool
    {
        return false;
    }
}