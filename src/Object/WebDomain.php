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
class WebDomain
{
    use GeneralDomain, DateTime;

    private $uDisk;
    private $uBandwidth;
    private $template;
    private $alias;
    private $stats;
    private $statsUser;
    private $ssl;
    private $sslHome;
    private $letsencrypt;
    private $ftp_user;
    private $ftp_path;
    private $auth_user;
    private $backend;
    private $proxy;
    private $proxyExt;
    private $docroot;

    public function __construct()
    {
    }

    public function loadData($command, $data)
    {
        if ($command == 'list-web') {
            return $this->listWebDomains($data);
        } elseif ($command == 'get-web') {
            return $this->listWebDomains($data)[0];
        }
    }

    private function listWebDomains($data)
    {
        $result = [];
        foreach ($data as $domainname => $data) {
            $obj = $this->parseWebDomain($domainname, $data);
            $result[] = $obj;
        }

        return $result;
    }

    private function parseWebDomain($domainname, $data)
    {
        $obj = new self();
        $obj->setDomainname($domainname);
        $obj->setIp($data['IP']);
        $obj->setIp6($data['IP6']);
        $obj->setUDisk($data['U_DISK']);
        $obj->setUBandwidth($data['U_BANDWIDTH']);
        $obj->setTemplate($data['TPL']);
        $obj->setAlias($data['ALIAS']);
        $obj->setStats($data['STATS']);
        $obj->setStatsUser($data['STATS_USER']);
        $obj->setSsl($data['SSL'] == 'yes');
        $obj->setSslHome($data['SSL_HOME']);
        $obj->setLetsencrypt($data['LETSENCRYPT'] == 'yes');
        $obj->setFtp_user($data['FTP_USER']);
        $obj->setFtp_path($data['FTP_PATH']);
        $obj->setAuth_user($data['AUTH_USER']);
        $obj->setBackend($data['BACKEND']);
        $obj->setProxy($data['PROXY']);
        $obj->setProxyExt($data['PROXY_EXT']);
        $obj->setSuspended($data['SUSPENDED'] == 'yes');
        $obj->setTime($data['TIME']);
        $obj->setDate($data['DATE']);
        $obj->setDocroot($data['DOCROOT']);

        return $obj;
    }

    public function getUDisk()
    {
        return $this->uDisk;
    }

    public function setUDisk($uDisk)
    {
        $this->uDisk = $uDisk;
    }

    public function getUBandwidth()
    {
        return $this->uBandwidth;
    }

    public function setUBandwidth($uBandwidth)
    {
        $this->uBandwidth = $uBandwidth;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function setStats($stats)
    {
        $this->stats = $stats;
    }

    public function getStatsUser()
    {
        return $this->statsUser;
    }

    public function setStatsUser($statsUser)
    {
        $this->statsUser = $statsUser;
    }

    public function getSsl()
    {
        return $this->ssl;
    }

    public function setSsl($ssl)
    {
        $this->ssl = $ssl;
    }

    public function getSslHome()
    {
        return $this->sslHome;
    }

    public function setSslHome($sslHome)
    {
        $this->sslHome = $sslHome;
    }

    public function getLetsencrypt()
    {
        return $this->letsencrypt;
    }

    public function setLetsencrypt($letsencrypt)
    {
        $this->letsencrypt = $letsencrypt;
    }

    public function getFtp_user()
    {
        return $this->ftp_user;
    }

    public function setFtp_user($ftp_user)
    {
        $this->ftp_user = $ftp_user;
    }

    public function getFtp_path()
    {
        return $this->ftp_path;
    }

    public function setFtp_path($ftp_path)
    {
        $this->ftp_path = $ftp_path;
    }

    public function getAuth_user()
    {
        return $this->auth_user;
    }

    public function setAuth_user($auth_user)
    {
        $this->auth_user = $auth_user;
    }

    public function getBackend()
    {
        return $this->backend;
    }

    public function setBackend($backend)
    {
        $this->backend = $backend;
    }

    public function getProxy()
    {
        return $this->proxy;
    }

    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    public function getProxyExt()
    {
        return $this->proxyExt;
    }

    public function setProxyExt($proxyExt)
    {
        $this->proxyExt = $proxyExt;
    }

    public function getDocroot()
    {
        return $this->docroot;
    }

    public function setDocroot($docroot)
    {
        $this->docroot = $docroot;
    }

    public function getSuspended()
    {
        return $this->suspended;
    }
}
