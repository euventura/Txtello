<?php

namespace Uello\Txtello\Validations;

use DateTime;
use Uello\Txtello\Interfaces\ValidationInterface;

class Date extends Validation
{

    public function validate($value) : bool
    {
        
        $this->extraFormat = $this->extraFormat ?? 'dmY';
        DateTime::createFromFormat($this->extraFormat , $value);
        $errors = DateTime::getLastErrors();

        if ($errors['error_count'] > 0) {
            return false;
        }

        return true;
    }
}