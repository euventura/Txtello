<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Validation implements ValidationInterface
{


    protected $extraFormat;
    protected $isValid = true;
    protected $error;
    protected $padChar = ' ';
    protected $padDirection = STR_PAD_RIGHT;

    public function __construct($extraFormat = null)
    {
        $this->extraFormat = $extraFormat;
    }

    public function validate($value) : bool
    {
        return $this->isValid = true;
    }

    public function getError() : string
    {
        if (!$this->isValid) {
            return "Invalid Type: " . get_class($this);
        }

        return '';
    }

    public function fill($value, $size) : String
    {
        return str_pad($value, $size, $this->padChar, $this->padDirection);
    }

    public function clear($value) : String
    {
        return trim($value);
    }

}