<?php

namespace MadeITBelgium\VestaCP\Validation;

class ValidatorExtensions
{
    /**
     * @var MadeITBelgium\VestaCP\Validation\Validator
     */
    private $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validateUser($attribute, $value)
    {
        return $this->validator->isUser($value);
    }

    public function validateUservailable($attribute, $value)
    {
        return $this->validator->isUserAvailable($value);
    }

    public function validateIpaddress($attribute, $value)
    {
        return $this->validator->isValidIp($value);
    }

    public function validateIpv6address($attribute, $value)
    {
        return $this->validator->isValidIpv6($value);
    }
}
