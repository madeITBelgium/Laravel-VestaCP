<?php

namespace MadeITBelgium\VestaCP\Object;

/**
 * VestaCP API.
 *
 * @version    0.0.1
 *
 * @copyright  Copyright (c) 2019 Made I.T. (http://www.madeit.be)
 * @author     Made I.T. <info@madeit.be>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-3.txt    LGPL
 */
class Database
{
    use DateTime;

    private $database;
    private $dbuser;
    private $host;
    private $type;
    private $charset;
    private $u_disk;
    private $suspended;
    
    public function __construct()
    {
    }

    public function loadData($command, $data)
    {
        if ($command == 'list-db') {
            return $this->listDatabases($data);
        } elseif ($command == 'get-db') {
            return $this->listDatabases($data)[0];
        }
    }

    private function listDatabases($data)
    {
        $result = [];
        foreach ($data as $data) {
            $obj = $this->parseDatabase($data);
            $result[] = $obj;
        }

        return $result;
    }

    private function parseDatabase($data)
    {
        $obj = new self();
        $obj->setDatabase($data['DATABASE']);
        $obj->setDbuser($data['DBUSER']);
        $obj->setHost($data['HOST']);
        $obj->setType($data['TYPE']);
        $obj->setCharset($data['CHARSET']);
        $obj->setU_disk($data['U_DISK']);
        $obj->setSuspended($data['SUSPENDED'] == 'yes');
        $obj->setTime($data['TIME']);
        $obj->setDate($data['DATE']);

        return $obj;
    }
    
    public function getDatabase(){
        return $this->database;
    }

    public function setDatabase($database){
        $this->database = $database;
    }

    public function getDbuser(){
        return $this->dbuser;
    }

    public function setDbuser($dbuser){
        $this->dbuser = $dbuser;
    }

    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function getCharset(){
        return $this->charset;
    }

    public function setCharset($charset){
        $this->charset = $charset;
    }

    public function getU_disk(){
        return $this->u_disk;
    }

    public function setU_disk($u_disk){
        $this->u_disk = $u_disk;
    }

    public function getSuspended(){
        return $this->suspended;
    }

    public function setSuspended($suspended){
        $this->suspended = $suspended;
    }
}
