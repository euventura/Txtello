<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Validation implements ValidationInterface
{

    protected $value;
    protected $extraFormat;
    protected $errors;

    public function __construct($value, $extraFormat = null)
    {
        $this->value = $value;
        $this->extraFormat = $extraFormat;
    }

    public function validate() : bool
    {
        return true;
    }

    public function getError() : array
    {
        return [];
    }

}