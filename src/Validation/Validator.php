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
    
    public function isValidIp($value) {
        $ip_regex = '([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])';
        $validation = "/^" . $ip_regex . "\." . $ip_regex . "\." . $ip_regex . "\." . $ip_regex . "\$/i";
        if (preg_match($validation, $value)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function isValidIpv6($value) {
        $ip_regex = '([1-9]?[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])';
        
        $WORD = "[0-9A-Fa-f]\{1,4\}";
        
        # flat address, no compressed words
        $FLAT = "^$WORD\(:$WORD\)\{7\}\$";
            
        $COMP2="^\($WORD:\)\{1,1\}\(:$WORD\)\{1,6\}\$";
        $COMP3="^\($WORD:\)\{1,2\}\(:$WORD\)\{1,5\}\$";
        $COMP4="^\($WORD:\)\{1,3\}\(:$WORD\)\{1,4\}\$";
        $COMP5="^\($WORD:\)\{1,4\}\(:$WORD\)\{1,3\}\$";
        $COMP6="^\($WORD:\)\{1,5\}\(:$WORD\)\{1,2\}\$";
        $COMP7="^\($WORD:\)\{1,6\}\(:$WORD\)\{1,1\}\$";
        # trailing :: edge case, includes case of only :: (all 0's)
        $EDGE_TAIL = "^\(\($WORD:\)\{1,7\}\|:\):\$";
        # leading :: edge case
        $EDGE_LEAD = "^:\(:$WORD\)\{1,7\}\$";
   
        $validation = "\($FLAT\)\|\($COMP2\)\|\($COMP3\)\|\($COMP4\)\|\($COMP5\)\|\($COMP6\)\|\($COMP7\)\|\($EDGE_TAIL\)\|\($EDGE_LEAD\)";
    
        if (preg_match($validation, $value)) {
            return true;
        } else {
            return false;
        }
    }
}
