<?php

namespace MadeITBelgium\VestaCP\Command;

use MadeITBelgium\VestaCP\Object\DNSDomain as ObjectDNSDomain;
use MadeITBelgium\VestaCP\Object\MailDomain as ObjectMailDomain;
use MadeITBelgium\VestaCP\Object\WebDomain as ObjectWebDomain;

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

    public function listWebDomains($user)
    {
        $response = $this->vestacp->call('v-list-web-domains', '', [$user]);

        $domain = new ObjectWebDomain();

        return $domain->loadData('list-web', $response);
    }

    public function listWebDomain($user, $domain)
    {
        $response = $this->vestacp->call('v-list-web-domain', '', [$user, $domain]);

        $domain = new ObjectWebDomain();

        return $domain->loadData('get-web', $response);
    }

    public function listDNSDomains($user)
    {
        $response = $this->vestacp->call('v-list-dns-domains', '', [$user]);

        $domain = new ObjectDNSDomain();

        return $domain->loadData('list-dns', $response);
    }

    public function listDNSDomain($user, $domain)
    {
        $response = $this->vestacp->call('v-list-dns-domain', '', [$user, $domain]);

        $domain = new ObjectDNSDomain();

        return $domain->loadData('get-dns', $response);
    }

    public function listMailDomains($user)
    {
        $response = $this->vestacp->call('v-list-mail-domains', '', [$user]);

        $domain = new ObjectMailDomain();

        return $domain->loadData('list-mail', $response);
    }

    public function listMailDomain($user, $domain)
    {
        $response = $this->vestacp->call('v-list-mail-domain', '', [$user, $domain]);

        $domain = new ObjectMailDomain();

        return $domain->loadData('get-mail', $response);
    }

    /*
     * Create new domain
     */
    public function create($user, $domain, $ip = null, $ipv6 = null, $restart = null)
    {
        $request = [$user, $domain];
        if (!empty($ip)) {
            $request[] = $ip;
            if (!empty($ipv6)) {
                $request[] = $ipv6;
                if (!empty($restart)) {
                    $request[] = $restart;
                }
            }
        }
        $this->vestacp->call('v-add-domain', 'yes', $request);

        return true;
    }

    /*
     * Create FTP User
     */
    public function createFtp($user, $domain, $ftp_user, $ftp_password, $ftp_path = null)
    {
        $request = [$user, $domain, $ftp_user, $ftp_password];
        if (!empty($ftp_path)) {
            $request[] = $ftp_path;
        }
        $this->vestacp->call('v-add-web-domain-ftp', 'yes', $request);

        return true;
    }

    public function changeFtpPassword($user, $domain, $ftp_user, $ftp_password)
    {
        $request = [$user, $domain, $ftp_user, $ftp_password];
        $this->vestacp->call('v-change-web-domain-ftp-password', 'yes', $request);

        return true;
    }

    public function deleteFtpUser($user, $domain, $ftp_user)
    {
        $request = [$user, $domain, $ftp_user];
        $this->vestacp->call('v-delete-web-domain-ftp', 'yes', $request);

        return true;
    }

    public function getLastResultCode()
    {
        return $this->vestacp->getLastResultCode();
    }
}
