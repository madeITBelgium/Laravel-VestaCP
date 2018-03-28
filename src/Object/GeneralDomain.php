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
trait GeneralDomain
{
    private $domainname;
    private $suspended;
    private $ip;
    private $ip6;
    private $time;
    private $date;

    public function getDomainname()
    {
        return $this->domainname;
    }

    public function setDomainname($domainname)
    {
        $this->domainname = $domainname;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function getIp6()
    {
        return $this->ip6;
    }

    public function setIp6($ip6)
    {
        $this->ip6 = $ip6;
    }

    public function getSuspended()
    {
        return $this->suspended;
    }

    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}
