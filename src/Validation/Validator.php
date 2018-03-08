<?php

namespace MadeITBelgium\VestaCP\Validation;

use MadeITBelgium\VestaCP\VestaCP;

class Validator
{
    public function isUser($value)
    {
        $validation = '/^[a-z0-9]{0,62}$/i';
        if (preg_match($validation, $value)) {
            return true;
        } else {
            return false;
        }
    }

    public function isUserAvailable($value)
    {
        $vestacp = new VestaCP(config('vestacp.reseller'), config('vestacp.hash'));

        try {
            $vestacp = $vestacp->user()->get($value);

            return true;
        } catch (\Excpetion $e) {
            return false;
        }
    }
}
