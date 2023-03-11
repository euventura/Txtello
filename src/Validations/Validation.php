<?php

namespace Uello\Txtello\Validations;

use Uello\Txtello\Interfaces\ValidationInterface;

class Validation implements ValidationInterface
{


    protected $extraFormat;
    protected $error;
    protected $padChar = ' ';
    protected $padDirection = STR_PAD_RIGHT;

    /**
     * Undocumented function
     *
     * @param $extraFormat
     */
    public function __construct($extraFormat = null)
    {
        $this->extraFormat = $extraFormat;
    }

    /**
     * Check if is Valid
     *
     * @param $value
     * @return boolean
     */
    public function validate($value) : bool
    {
        return true;
    }

    /**
     * Undocumented function
     *
     * @param String $value
     * @return string
     */
    public function getError($value) : string
    {
        if (!$this->validate($value)) {
            return "Invalid Type: " . get_class($this);
        }

        return '';
    }

    /**
     * Complete with filler
     *
     * @param $value
     * @param $size
     * @return String
     */
    public function fill($value, $size) : String
    {
        return str_pad($value, $size, $this->padChar, $this->padDirection);
    }

    /**
     * Remove Filler from Data
     *
     * @param $value
     * @return String
     */
    public function clear($value) : String
    {
        return trim($value);
    }

}