<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

abstract class Validation implements ValidationInterface
{


    protected $extraFormat;
    protected $error;
    protected $padChar = ' ';
    protected $padDirection = STR_PAD_RIGHT;

    public function __construct($extraFormat = null)
    {
        $this->extraFormat = $extraFormat;
    }

    public function validate($value) : bool
    {
        return true;
    }

    public function getError() : array
    {
        return [];
    }

    public function fill($value, $size) : String
    {
        return str_pad($value, $size, $this->padChar, $this->padDirection);
    }

}