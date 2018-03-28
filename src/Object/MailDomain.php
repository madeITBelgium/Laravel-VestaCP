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
class MailDomain
{
    use GeneralDomain;

    private $antivirus;
    private $antispam;
    private $dkim;
    private $catchall;
    private $accounts;
    private $uDisk;

    public function __construct()
    {
    }

    public function loadData($command, $data)
    {
        if ($command == 'list-mail') {
            return $this->listMailDomains($data);
        } elseif ($command == 'get-mail') {
            return $this->listMailDomains($data)[0];
        }
    }

    private function listMailDomains($data)
    {
        $result = [];
        foreach ($data as $domainname => $data) {
            $obj = $this->parseMailDomain($domainname, $data);
            $result[] = $obj;
        }

        return $result;
    }

    private function parseMailDomain($domainname, $data)
    {
        $obj = new self();
        $obj->setDomainname($domainname);
        $obj->setAntivirus($data['ANTIVIRUS'] == 'yes');
        $obj->setAntispam($data['ANTISPAM'] == 'yes');
        $obj->setDkim($data['DKIM'] == 'yes');
        $obj->setCatchall($data['CATCHALL']);
        $obj->setUDisk($data['U_DISK']);
        $obj->setAccounts($data['ACCOUNTS']);
        $obj->setSuspended($data['SUSPENDED'] == 'yes');
        $obj->setTime($data['TIME']);
        $obj->setDate($data['DATE']);

        return $obj;
    }

    public function getAntivirus()
    {
        return $this->antivirus;
    }

    public function setAntivirus($antivirus)
    {
        $this->antivirus = $antivirus;
    }

    public function getAntispam()
    {
        return $this->antispam;
    }

    public function setAntispam($antispam)
    {
        $this->antispam = $antispam;
    }

    public function getDkim()
    {
        return $this->dkim;
    }

    public function setDkim($dkim)
    {
        $this->dkim = $dkim;
    }

    public function getCatchall()
    {
        return $this->catchall;
    }

    public function setCatchall($catchall)
    {
        $this->catchall = $catchall;
    }

    public function getAccounts()
    {
        return $this->accounts;
    }

    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }

    public function getUDisk()
    {
        return $this->uDisk;
    }

    public function setUDisk($uDisk)
    {
        $this->uDisk = $uDisk;
    }
}
