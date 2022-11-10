<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Cpf extends Validation
{

    public function validate($value) : bool
    {
        return false;
    }
}