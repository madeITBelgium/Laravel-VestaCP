<?php

namespace MadeITBelgium\VestaCP\Command;

use MadeITBelgium\VestaCP\Object\Database as ObjectDatabase;

/**
 * VestaCP API.
 *
 * @version    0.0.1
 *
 * @copyright  Copyright (c) 2018 Made I.T. (http://www.madeit.be)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.txt    LGPL
 */
class Database
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
     * v-list-databases USER
     */
    public function listDatabases($user)
    {
        $response = $this->vestacp->call('v-list-databases', '', [$user]);

        $database = new ObjectDatabase();

        return $database->loadData('list-db', $response);
    }

    /*
     * v-list-database USER DATABASE
     */
    public function listDatabase($user, $database)
    {
        $response = $this->vestacp->call('v-list-database', '', [$user, $database]);

        $database = new ObjectDatabase();

        return $database->loadData('get-db', $response);
    }

    /*
     * v-add-database USER DATABASE DBUSER DBPASS [TYPE] [HOST] [CHARSET]
     */
    public function create($user, $database, $dbuser, $dbpass, $type = null, $host = null, $charset = null)
    {
        $request = [$user, $database, $dbuser, $dbpass];
        if ($type != null) {
            $request[] = $type;
            if ($host != null) {
                $request[] = $host;
                if ($charset != null) {
                    $request[] = $charset;
                }
            }
        }

        $this->vestacp->call('v-add-database', 'yes', $request);

        return true;
    }

    /*
     * v-change-database-password USER DATABASE DBPASS
     */
    public function changePassword($user, $database, $password)
    {
        $request = [$user, $database, $password];

        $this->vestacp->call('v-change-database-password', 'yes', $request);

        return true;
    }

    /*
     * v-delete-database USER DATABASE
     */
    public function delete($user, $database)
    {
        $request = [$user, $database];

        $this->vestacp->call('v-delete-database', 'yes', $request);

        return true;
    }

    public function getLastResultCode()
    {
        return $this->vestacp->getLastResultCode();
    }
}
