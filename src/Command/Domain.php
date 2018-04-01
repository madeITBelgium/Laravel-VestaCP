<?php

namespace MadeITBelgium\VestaCP\Command;

use MadeITBelgium\VestaCP\Object\DNSDomain as ObjectDNSDomain;
use MadeITBelgium\VestaCP\Object\DNSRecord as ObjectDNSRecord;
use MadeITBelgium\VestaCP\Object\MailAccount as ObjectMailAccount;
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

    /* WEB */
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

    /* DNS */
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

    public function listDNSRecords($user, $domain)
    {
        $response = $this->vestacp->call('v-list-dns-records', '', [$user, $domain]);

        $domain = new ObjectDNSRecord();

        return $domain->loadData('get-records', $response);
    }

    /*
     * Create new DNS domain
     */
    public function createDNS($user, $domain, $ip, $ipv6, $ns = [], $restart = null)
    {
        $request = [$user, $domain, $ip, $ipv6];
        if (!is_array($ns) || count($ns) > 0 && count($ns) < 9) {
            $request = array_merge($request, $ns);
            if (!empty($restart)) {
                $request[] = $restart;
            }
        }
        $this->vestacp->call('v-add-dns-domain', 'yes', $request);

        return true;
    }

    /*
     * Create new DNS record
     */
    public function createDNSRecord($user, $domain, $record, $type, $value, $priority = null, $id = null, $restart = null)
    {
        $request = [$user, $domain, $record, $type, $value];
        if (!empty($priority)) {
            $request[] = $priority;
            if (!empty($id)) {
                $request[] = $id;
                if (!empty($restart)) {
                    $request[] = $restart;
                }
            }
        }
        $this->vestacp->call('v-add-dns-record', 'yes', $request);

        return true;
    }

    /*
     * Delete new DNS domain
     */
    public function deleteDNS($user, $domain)
    {
        $request = [$user, $domain];
        $this->vestacp->call('v-delete-dns-domain', 'yes', $request);

        return true;
    }

    /*
     * Delete new DNS record
     */
    public function deleteDNSRecord($user, $domain, $id)
    {
        $request = [$user, $domain, $id];
        $this->vestacp->call('v-delete-dns-record', 'yes', $request);

        return true;
    }

    /* MAIL */
    /*
     * Create mail domain
     * v-add-mail-domain USER DOMAIN [ANTISPAM] [ANTIVIRUS] [DKIM] [DKIM_SIZE]
     */
    public function createMail($user, $domain)
    {
        $request = [$user, $domain];

        $this->vestacp->call('v-add-mail-domain', 'yes', $request);

        return true;
    }

    /*
     * v-add-mail-account USER DOMAIN ACCOUNT PASSWORD [QUOTA]
     */
    public function createMailAccount($user, $domain, $account, $password, $quota = null)
    {
        $request = [$user, $domain, $account, $password];
        if ($quota != null) {
            $request[] = $quota;
        }
        $this->vestacp->call('v-add-mail-account', 'yes', $request);

        return true;
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

    public function listMailAccounts($user, $domain)
    {
        $response = $this->vestacp->call('v-list-mail-accounts', '', [$user, $domain]);

        $domain = new ObjectMailAccount();

        return $domain->loadData('get-accounts', $response);
    }

    /*
     * Delete new DNS domain
     */
    public function deleteMail($user, $domain)
    {
        $request = [$user, $domain];
        $this->vestacp->call('v-delete-mail-domain', 'yes', $request);

        return true;
    }

    /*
     * Delete new DNS record
     */
    public function deleteMailAccount($user, $domain, $account)
    {
        $request = [$user, $domain, $account];
        $this->vestacp->call('v-delete-mail-account', 'yes', $request);

        return true;
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

    /*
     * Update FTP users password
     */
    public function changeFtpPassword($user, $domain, $ftp_user, $ftp_password)
    {
        $request = [$user, $domain, $ftp_user, $ftp_password];
        $this->vestacp->call('v-change-web-domain-ftp-password', 'yes', $request);

        return true;
    }

    /*
     * Delete FTP user
     */
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
