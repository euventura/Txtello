<?php

namespace Uello\Txtello\Errors;

class ErrorBag
{

    protected $errors = [];

    public function add(Error $error)
    {
        $this->errors[$error->getLine()][$error->getFieldName()] = $error;
    }

    public function merge(ErrorBag $toMergeErrorBag)
    {
        $this->errors = array_merge($this->errors, $toMergeErrorBag->getErrors());
    }

    public function getErrors()
    {
        return $this->errors;
    }
}