<?php

namespace Uello\Txtello\Objects;

class ErrorBag 
{
    /**
     * Errors array
     *
     * @var array
     */
    private $errors = [];

    /**
     * Return all errors
     *
     * @return void
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Add error to bag
     *
     * @param [type] $error
     * @param [type] $identifier
     * @return void
     */
    public function addError($error, $identifier = null)
    {
        $this->errors[$identifier] = $error;
    }

    /**
     * clear errors
     *
     * @return void
     */
    protected function clear()
    {
        $this->errors = [];
    }
}