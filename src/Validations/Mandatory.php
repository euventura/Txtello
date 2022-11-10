<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Mandatory extends Validation
{

    public function validate($value) : bool
    {
        return !empty($value);
    }
}