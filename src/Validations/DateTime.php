<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class DateTime extends Date
{

    public function validate($value) : bool
    {
        return false;
    }
}