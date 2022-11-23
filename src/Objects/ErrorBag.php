<?php

namespace Uello\Txtello\Objects;

class ErrorBag 
{
    private $errors = [];

    public function getErrors()
    {
        return $this->errors;
    }

    public function addError($error, $identifier = null)
    {
        $this->errors[$identifier] = $error;
    }

    protected function clear()
    {
        $this->errors = [];
    }
}