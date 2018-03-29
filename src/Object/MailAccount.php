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
class MailAccount
{
    use DateTime;
    private $account;
    private $alias;
    private $fwd;
    private $fwd_only;
    private $autoreply;
    private $quota;
    private $uDisk;
    private $suspended;
    
    public function __construct()
    {
        
    }

    public function loadData($command, $data)
    {
        if ($command == 'get-accounts') {
            return $this->listMailAccounts($data);
        }
    }

    private function listMailAccounts($data)
    {
        $result = [];
        foreach ($data as $account => $data) {
            $obj = $this->parseMailAccount($account, $data);
            $result[] = $obj;
        }

        return $result;
    }

    private function parseMailAccount($account, $data)
    {
        $obj = new self();
        $obj->setAccount($account);
        $obj->setAlias($data['ALIAS']);
        $obj->setFwd($data['FWD']);
        $obj->setFwd_only($data['FWD_ONLY']);
        $obj->setAutoreply($data['AUTOREPLY'] == 'yes');
        $obj->setQuota($data['QUOTA']);
        $obj->setUDisk($data['U_DISK']);
        $obj->setSuspended($data['SUSPENDED'] == 'yes');
        $obj->setTime($data['TIME']);
        $obj->setDate($data['DATE']);
        return $obj;
    }
    
    public function getAccount(){
        return $this->account;
    }

    public function setAccount($account){
        $this->account = $account;
    }

    public function getAlias(){
        return $this->alias;
    }

    public function setAlias($alias){
        $this->alias = $alias;
    }

    public function getFwd(){
        return $this->fwd;
    }

    public function setFwd($fwd){
        $this->fwd = $fwd;
    }

    public function getFwd_only(){
        return $this->fwd_only;
    }

    public function setFwd_only($fwd_only){
        $this->fwd_only = $fwd_only;
    }
    
    public function getAutoreply(){
        return $this->autoreply;
    }

    public function setAutoreply($autoreply){
        $this->autoreply = $autoreply;
    }

    public function getQuota(){
        return $this->quota;
    }

    public function setQuota($quota){
        $this->quota = $quota;
    }

    public function getUDisk(){
        return $this->uDisk;
    }

    public function setUDisk($uDisk){
        $this->uDisk = $uDisk;
    }

    public function getSuspended(){
        return $this->suspended;
    }

    public function setSuspended($suspended){
        $this->suspended = $suspended;
    }
}
