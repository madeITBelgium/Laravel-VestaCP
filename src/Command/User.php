<?php

namespace MadeITBelgium\VestaCP\Command;

use Exception;
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
        if (!is_array($response)) {
            throw new Exception($response);
        }

        $user = new ObjectUser();

        return $user->loadData('get', $response);
    }

    /*
     * Create new user
     */
    public function create($user, $password, $email, $package = null, $firstname = null, $lastname = null)
    {
        $request = [$user, $password, $email];
        if (!empty($package)) {
            $request[] = $package;
            if (!empty($firstname)) {
                $request[] = $firstname;
                if (!empty($lastname)) {
                    $request[] = $lastname;
                }
            }
        }
        $this->vestacp->call('v-add-user', 'yes', $request);

        return true;
    }

    /*
     * v-change-user-password USER PASSWORD
     */
    public function changePassword($user, $password)
    {
        $request = [$user, $password];
        $this->vestacp->call('v-change-user-password', 'yes', $request);

        return true;
    }

    public function getLastResultCode()
    {
        return $this->vestacp->getLastResultCode();
    }
}
