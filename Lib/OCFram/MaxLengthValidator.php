<?php

namespace OCFram;

class MaxLengthValidator extends Validator
{
    // PROPERTY //

    protected $maxLength;

    // CONSTRUCTOR //

    public function __construct($errorMessage, $maxLength)
    {
        parent::__construct($errorMessage);

        $this->setMaxLength($maxLength);
    }

    // METHODS //

    public function isValid($value)
    {
        return strlen($value) <= $this->maxLength;
    }

    public function setMaxLength($maxLength)
    {
        $maxLength = (int) $maxLength;

        if ($maxLength > 0) {
            $this->maxLength = $maxLength;
        } else {
            throw new \RuntimeException('La longueur maximale doit être un nombre supérieur à 0');
        }
    }
}
