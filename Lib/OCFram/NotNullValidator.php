<?php

namespace OCFram;

class NotNullValidator extends Validator
{

    // METHOD //
    
    public function isValid($value)
    {
        return $value != '';
    }
}
