<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Date extends Validation
{

    public function validate($value) : bool
    {
        //@todo: programar esta validação sem esquecer que a data atem o formato correto.
        return false;
    }
}