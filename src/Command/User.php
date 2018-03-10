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
class User
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

    /**
     * list all vesta users.
     */
    public function listUsers()
    {
        $response = $this->vestacp->call('v-list-users');

        $user = new ObjectUser();
        return $user->loadData('list', $response);
    }

    /**
     * list sigle vesta users.
     */
    public function get($username)
    {
        $response = $this->vestacp->call('v-list-user', '', [$username]);

        $user = new ObjectUser();
        return $user->loadData('get', $response);
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
