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
class User
{
    private $username;
    private $firstName;
    private $lastName;

    private $package;

    private $webTemplate;
    private $backendTemplate;
    private $proxyTemplate;
    private $dnsTemplate;

    private $packageWebDomains;
    private $packageWebAliases;
    private $packageDnsDomains;
    private $packageDnsRecords;
    private $packageMailDomains;
    private $packageMailAccounts;
    private $packageDatabases;
    private $packageCronJobs;
    private $packageDiskQuota;
    private $packageBandwidth;
    private $packageBackups;

    private $home;
    private $ns;
    private $shell;
    private $contact;
    private $cronReports;
    private $rkey;
    private $suspended;
    private $suspended_users;
    private $suspended_web;
    private $suspended_dns;
    private $suspended_mail;
    private $suspended_db;
    private $suspended_cron;
    private $ipAvailable;
    private $ipOwned;
    private $ip6Available;
    private $ip6Owned;

    private $u_users;
    private $u_disk;
    private $u_disk_dirs;
    private $u_disk_web;
    private $u_disk_mail;
    private $u_disk_db;
    private $u_bandwidth;
    private $u_web_domains;
    private $u_web_ssl;
    private $u_web_aliases;
    private $u_dns_domains;
    private $u_dns_records;
    private $u_mail_domains;
    private $u_mail_dkim;
    private $u_mail_accounts;
    private $u_databases;
    private $u_cron_jobs;
    private $u_backups;
    private $language;
    private $time;
    private $date;

    public function __construct()
    {
    }

    public function loadData($command, $data)
    {
        if ($command == 'list') {
            return $this->listUsers($data);
        } elseif ($command == 'get') {
            return $this->listUsers($data)[0];
        }
    }

    private function listUsers($data)
    {
        $result = [];
        foreach ($data as $username => $user) {
            $obj = $this->parseUser($username, $user);
            $result[] = $obj;
        }

        return $result;
    }

    private function parseUser($username, $user)
    {
        $obj = new self();
        $obj->setUsername($username);
        $obj->setFirstName($user['FNAME']);
        $obj->setLastName($user['LNAME']);

        $obj->setPackage($user['PACKAGE']);

        $obj->setWebTemplate($user['WEB_TEMPLATE']);
        $obj->setBackendTemplate($user['BACKEND_TEMPLATE']);
        $obj->setProxyTemplate($user['PROXY_TEMPLATE']);
        $obj->setDnsTemplate($user['DNS_TEMPLATE']);

        $obj->setPackageWebDomains($user['WEB_DOMAINS']);
        $obj->setPackageWebAliases($user['WEB_ALIASES']);
        $obj->setPackageDnsDomains($user['DNS_DOMAINS']);
        $obj->setPackageDnsRecords($user['DNS_RECORDS']);
        $obj->setPackageMailDomains($user['MAIL_DOMAINS']);
        $obj->setPackageMailAccounts($user['MAIL_ACCOUNTS']);
        $obj->setPackageDatabases($user['DATABASES']);
        $obj->setPackageCronJobs($user['CRON_JOBS']);
        $obj->setPackageBandwidth($user['BANDWIDTH']);

        if(isset($user['HOME']))
            $obj->setHome($user['HOME']);
        $obj->setNs($user['NS']);
        $obj->setShell($user['SHELL']);
        $obj->setPackageBackups($user['BACKUPS']);

        $obj->setContact($user['CONTACT']);
        $obj->setCronReports($user['CRON_REPORTS'] == 'yes');
        $obj->setRkey($user['RKEY']);

        $obj->setSuspended($user['SUSPENDED'] == 'yes');
        $obj->setSuspended_users($user['SUSPENDED_USERS']);
        $obj->setSuspended_web($user['SUSPENDED_WEB']);
        $obj->setSuspended_dns($user['SUSPENDED_DNS']);
        $obj->setSuspended_mail($user['SUSPENDED_MAIL']);
        $obj->setSuspended_db($user['SUSPENDED_DB']);
        $obj->setSuspended_cron($user['SUSPENDED_CRON']);
        $obj->setIpAvailable($user['IP_AVAIL']);
        $obj->setIpOwned($user['IP_OWNED']);
        if(isset($user['IP6_AVAIL']))
            $obj->setIp6Available($user['IP6_AVAIL']);
        if(isset($user['IP6_OWNED']))
            $obj->setIp6Owned($user['IP6_OWNED']);
        $obj->setU_users($user['U_USERS']);
        $obj->setU_disk($user['U_DISK']);
        $obj->setU_disk_dirs($user['U_DISK_DIRS']);
        $obj->setU_disk_web($user['U_DISK_WEB']);
        $obj->setU_disk_mail($user['U_DISK_MAIL']);
        $obj->setU_disk_db($user['U_DISK_DB']);
        $obj->setU_bandwidth($user['U_BANDWIDTH']);
        $obj->setU_web_domains($user['U_WEB_DOMAINS']);
        $obj->setU_web_aliases($user['U_WEB_ALIASES']);
        $obj->setU_dns_domains($user['U_DNS_DOMAINS']);
        $obj->setU_dns_records($user['U_DNS_RECORDS']);
        $obj->setU_mail_domains($user['U_MAIL_DOMAINS']);
        $obj->setU_mail_dkim($user['U_MAIL_DKIM']);
        $obj->setU_mail_accounts($user['U_MAIL_ACCOUNTS']);
        $obj->setU_databases($user['U_DATABASES']);
        $obj->setU_cron_jobs($user['U_CRON_JOBS']);
        $obj->setU_backups($user['U_BACKUPS']);
        $obj->setLanguage($user['LANGUAGE']);
        $obj->setTime($user['TIME']);
        $obj->setDate($user['DATE']);

        return $obj;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getPackage()
    {
        return $this->package;
    }

    public function setPackage($package)
    {
        $this->package = $package;
    }

    public function getWebTemplate()
    {
        return $this->webTemplate;
    }

    public function setWebTemplate($webTemplate)
    {
        $this->webTemplate = $webTemplate;
    }

    public function getBackendTemplate()
    {
        return $this->backendTemplate;
    }

    public function setBackendTemplate($backendTemplate)
    {
        $this->backendTemplate = $backendTemplate;
    }

    public function getProxyTemplate()
    {
        return $this->proxyTemplate;
    }

    public function setProxyTemplate($proxyTemplate)
    {
        $this->proxyTemplate = $proxyTemplate;
    }

    public function getDnsTemplate()
    {
        return $this->dnsTemplate;
    }

    public function setDnsTemplate($dnsTemplate)
    {
        $this->dnsTemplate = $dnsTemplate;
    }

    public function getPackageWebDomains()
    {
        return $this->packageWebDomains;
    }

    public function setPackageWebDomains($packageWebDomains)
    {
        $this->packageWebDomains = $packageWebDomains;
    }

    public function getPackageWebAliases()
    {
        return $this->packageWebAliases;
    }

    public function setPackageWebAliases($packageWebAliases)
    {
        $this->packageWebAliases = $packageWebAliases;
    }

    public function getPackageDnsDomains()
    {
        return $this->packageDnsDomains;
    }

    public function setPackageDnsDomains($packageDnsDomains)
    {
        $this->packageDnsDomains = $packageDnsDomains;
    }

    public function getPackageDnsRecords()
    {
        return $this->packageDnsRecords;
    }

    public function setPackageDnsRecords($packageDnsRecords)
    {
        $this->packageDnsRecords = $packageDnsRecords;
    }

    public function getPackageMailDomains()
    {
        return $this->packageMailDomains;
    }

    public function setPackageMailDomains($packageMailDomains)
    {
        $this->packageMailDomains = $packageMailDomains;
    }

    public function getPackageMailAccounts()
    {
        return $this->packageMailAccounts;
    }

    public function setPackageMailAccounts($packageMailAccounts)
    {
        $this->packageMailAccounts = $packageMailAccounts;
    }

    public function getPackageDatabases()
    {
        return $this->packageDatabases;
    }

    public function setPackageDatabases($packageDatabases)
    {
        $this->packageDatabases = $packageDatabases;
    }

    public function getPackageCronJobs()
    {
        return $this->packageCronJobs;
    }

    public function setPackageCronJobs($packageCronJobs)
    {
        $this->packageCronJobs = $packageCronJobs;
    }

    public function getPackageDiskQuota()
    {
        return $this->packageDiskQuota;
    }

    public function setPackageDiskQuota($packageDiskQuota)
    {
        $this->packageDiskQuota = $packageDiskQuota;
    }

    public function getPackageBandwidth()
    {
        return $this->packageBandwidth;
    }

    public function setPackageBandwidth($packageBandwidth)
    {
        $this->packageBandwidth = $packageBandwidth;
    }

    public function getPackageBackups()
    {
        return $this->packageBackups;
    }

    public function setPackageBackups($packageBackups)
    {
        $this->packageBackups = $packageBackups;
    }

    public function getHome()
    {
        return $this->home;
    }

    public function setHome($home)
    {
        $this->home = $home;
    }

    public function getNs()
    {
        return $this->ns;
    }

    public function setNs($ns)
    {
        $this->ns = $ns;
    }

    public function getShell()
    {
        return $this->shell;
    }

    public function setShell($shell)
    {
        $this->shell = $shell;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function getCronReports()
    {
        return $this->cronReports;
    }

    public function setCronReports($cronReports)
    {
        $this->cronReports = $cronReports;
    }

    public function getRkey()
    {
        return $this->rkey;
    }

    public function setRkey($rkey)
    {
        $this->rkey = $rkey;
    }

    public function getSuspended()
    {
        return $this->suspended;
    }

    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;
    }

    public function getSuspended_users()
    {
        return $this->suspended_users;
    }

    public function setSuspended_users($suspended_users)
    {
        $this->suspended_users = $suspended_users;
    }

    public function getSuspended_web()
    {
        return $this->suspended_web;
    }

    public function setSuspended_web($suspended_web)
    {
        $this->suspended_web = $suspended_web;
    }

    public function getSuspended_dns()
    {
        return $this->suspended_dns;
    }

    public function setSuspended_dns($suspended_dns)
    {
        $this->suspended_dns = $suspended_dns;
    }

    public function getSuspended_mail()
    {
        return $this->suspended_mail;
    }

    public function setSuspended_mail($suspended_mail)
    {
        $this->suspended_mail = $suspended_mail;
    }

    public function getSuspended_db()
    {
        return $this->suspended_db;
    }

    public function setSuspended_db($suspended_db)
    {
        $this->suspended_db = $suspended_db;
    }

    public function getSuspended_cron()
    {
        return $this->suspended_cron;
    }

    public function setSuspended_cron($suspended_cron)
    {
        $this->suspended_cron = $suspended_cron;
    }

    public function getIpAvailable()
    {
        return $this->ipAvailable;
    }

    public function setIpAvailable($ipAvailable)
    {
        $this->ipAvailable = $ipAvailable;
    }

    public function getIpOwned()
    {
        return $this->ipOwned;
    }

    public function setIpOwned($ipOwned)
    {
        $this->ipOwned = $ipOwned;
    }

    public function getIp6Available()
    {
        return $this->ip6Available;
    }

    public function setIp6Available($ip6Available)
    {
        $this->ip6Available = $ip6Available;
    }

    public function getIp6Owned()
    {
        return $this->ip6Owned;
    }

    public function setIp6Owned($ip6Owned)
    {
        $this->ip6Owned = $ip6Owned;
    }

    public function getU_users()
    {
        return $this->u_users;
    }

    public function setU_users($u_users)
    {
        $this->u_users = $u_users;
    }

    public function getU_disk()
    {
        return $this->u_disk;
    }

    public function setU_disk($u_disk)
    {
        $this->u_disk = $u_disk;
    }

    public function getU_disk_dirs()
    {
        return $this->u_disk_dirs;
    }

    public function setU_disk_dirs($u_disk_dirs)
    {
        $this->u_disk_dirs = $u_disk_dirs;
    }

    public function getU_disk_web()
    {
        return $this->u_disk_web;
    }

    public function setU_disk_web($u_disk_web)
    {
        $this->u_disk_web = $u_disk_web;
    }

    public function getU_disk_mail()
    {
        return $this->u_disk_mail;
    }

    public function setU_disk_mail($u_disk_mail)
    {
        $this->u_disk_mail = $u_disk_mail;
    }

    public function getU_disk_db()
    {
        return $this->u_disk_db;
    }

    public function setU_disk_db($u_disk_db)
    {
        $this->u_disk_db = $u_disk_db;
    }

    public function getU_bandwidth()
    {
        return $this->u_bandwidth;
    }

    public function setU_bandwidth($u_bandwidth)
    {
        $this->u_bandwidth = $u_bandwidth;
    }

    public function getU_web_domains()
    {
        return $this->u_web_domains;
    }

    public function setU_web_domains($u_web_domains)
    {
        $this->u_web_domains = $u_web_domains;
    }

    public function getU_web_ssl()
    {
        return $this->u_web_ssl;
    }

    public function setU_web_ssl($u_web_ssl)
    {
        $this->u_web_ssl = $u_web_ssl;
    }

    public function getU_web_aliases()
    {
        return $this->u_web_aliases;
    }

    public function setU_web_aliases($u_web_aliases)
    {
        $this->u_web_aliases = $u_web_aliases;
    }

    public function getU_dns_domains()
    {
        return $this->u_dns_domains;
    }

    public function setU_dns_domains($u_dns_domains)
    {
        $this->u_dns_domains = $u_dns_domains;
    }

    public function getU_dns_records()
    {
        return $this->u_dns_records;
    }

    public function setU_dns_records($u_dns_records)
    {
        $this->u_dns_records = $u_dns_records;
    }

    public function getU_mail_domains()
    {
        return $this->u_mail_domains;
    }

    public function setU_mail_domains($u_mail_domains)
    {
        $this->u_mail_domains = $u_mail_domains;
    }

    public function getU_mail_dkim()
    {
        return $this->u_mail_dkim;
    }

    public function setU_mail_dkim($u_mail_dkim)
    {
        $this->u_mail_dkim = $u_mail_dkim;
    }

    public function getU_mail_accounts()
    {
        return $this->u_mail_accounts;
    }

    public function setU_mail_accounts($u_mail_accounts)
    {
        $this->u_mail_accounts = $u_mail_accounts;
    }

    public function getU_databases()
    {
        return $this->u_databases;
    }

    public function setU_databases($u_databases)
    {
        $this->u_databases = $u_databases;
    }

    public function getU_cron_jobs()
    {
        return $this->u_cron_jobs;
    }

    public function setU_cron_jobs($u_cron_jobs)
    {
        $this->u_cron_jobs = $u_cron_jobs;
    }

    public function getU_backups()
    {
        return $this->u_backups;
    }

    public function setU_backups($u_backups)
    {
        $this->u_backups = $u_backups;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
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
