<?php

namespace Uello\Txtello\Interfaces;

interface ValidationInterface
{

    public function __construct($value, $extraFormat = null);
    public function validate() : bool;
    public function getError() : array;

}