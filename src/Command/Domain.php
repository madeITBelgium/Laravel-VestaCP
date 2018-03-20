<?php

namespace MadeITBelgium\VestaCP\Command;

use MadeITBelgium\VestaCP\Object\User as ObjectUser;

/**
 * VestaCP API.
 *
 * @version    0.0.1
 *
 * @copyright  Copyright (c) 2018 Made I.T. (http://www.madeit.be)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.txt    LGPL
 */
class Domain
{
    private $vestacp;

    /**
     * set VestaCP.
     *
     * @param $vestacp
     */
    public function setVestaCP($vestacp)
    {
        $this->vestacp = $vestacp;
    }

    /**
     * get VestaCP.
     *
     * @param $vestacp
     */
    public function getVestaCP()
    {
        return $this->vestacp;
    }
    
    /*
     * Create new domain
     */
    public function create($user, $domain, $ip = null, $ipv6 = null, $restart = null)
    {
        $request = [$user, $domain];
        if(!empty($ip)) {
            $request[] = $ip;
            if(!empty($ipv6)) {
                $request[] = $ipv6;
                if(!empty($restart)) {
                    $request[] = $restart;
                }
            }
        }
        $this->vestacp->call('v-add-domain', 'yes', $request);
        
        return true;
    }

    public function getLastResultCode()
    {
        return $this->vestacp->getLastResultCode();
    }

    public function getLastResultMessage()
    {
        $this->vestacp->getLastResultMessage();
    }
}
