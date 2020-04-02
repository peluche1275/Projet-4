<?php

namespace OCFram;

abstract class Validator
{
    // PROPERTY //

    protected $errorMessage;

    // CONSTRUCTOR //


    public function __construct($errorMessage)
    {
        $this->setErrorMessage($errorMessage);
    }

    // METHODS //

    abstract public function isValid($value);

    public function errorMessage()
    {
        return $this->errorMessage;
    }

    // SETTERS //

    public function setErrorMessage($errorMessage)
    {
        if (is_string($errorMessage)) {
            $this->errorMessage = $errorMessage;
        }
    }

}
