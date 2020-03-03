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
class DNSDomain
{
    use GeneralDomain;
    use DateTime;
    private $template;
    private $ttl;
    private $exp;
    private $soa;
    private $serial;
    private $src;
    private $records;

    public function __construct()
    {
    }

    public function loadData($command, $data)
    {
        if ($command == 'list-dns') {
            return $this->listDnsDomains($data);
        } elseif ($command == 'get-dns') {
            return $this->listDnsDomains($data)[0];
        }
    }

    private function listDnsDomains($data)
    {
        $result = [];
        foreach ($data as $domainname => $data) {
            $obj = $this->parseDnsDomain($domainname, $data);
            $result[] = $obj;
        }

        return $result;
    }

    private function parseDnsDomain($domainname, $data)
    {
        $obj = new self();
        $obj->setDomainname($domainname);
        $obj->setIp($data['IP']);
        $obj->setIp6($data['IP6']);
        $obj->setTemplate($data['TPL']);
        $obj->setTtl($data['TTL']);
        $obj->setExp($data['EXP']);
        $obj->setSoa($data['SOA']);
        $obj->setSerial($data['SERIAL']);
        $obj->setSrc($data['SRC']);
        $obj->setRecords($data['RECORDS']);
        $obj->setSuspended($data['SUSPENDED'] == 'yes');
        $obj->setTime($data['TIME']);
        $obj->setDate($data['DATE']);

        return $obj;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
    }

    public function getTtl()
    {
        return $this->ttl;
    }

    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
    }

    public function getExp()
    {
        return $this->exp;
    }

    public function setExp($exp)
    {
        $this->exp = $exp;
    }

    public function getSoa()
    {
        return $this->soa;
    }

    public function setSoa($soa)
    {
        $this->soa = $soa;
    }

    public function getSerial()
    {
        return $this->serial;
    }

    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function setSrc($src)
    {
        $this->src = $src;
    }

    public function getRecords()
    {
        return $this->records;
    }

    public function setRecords($records)
    {
        $this->records = $records;
    }
}
