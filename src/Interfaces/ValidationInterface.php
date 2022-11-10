<?php

namespace Uello\Txtello\Interfaces;

interface ValidationInterface
{

    public function __construct($extraFormat = null);
    public function validate($value) : bool;
    public function getError() : array;
    public function fill($value, $size) : String;

}