<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Cpf extends Validation
{
    protected $padChar = 0;
    protected $padDirection = STR_PAD_LEFT;

    public function validate($value) : bool
    {
        return false;
    }
}