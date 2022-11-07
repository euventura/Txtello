<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Mandatory extends Validation
{

    public function validate() : bool
    {
        return !empty($this->value);
    }
}