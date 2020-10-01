<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use MadeITBelgium\VestaCP\VestaCP;

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testConstruct()
    {
        $vestacp = new VestaCP('server', 'hash');
        $user = $vestacp->user();

        $this->assertEquals($vestacp, $user->getVestaCP());
    }

    //v-list-users
    public function testListUsers()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '{
    "admin": {
        "FNAME": "System",
        "LNAME": "Administrator",
        "PACKAGE": "default",
        "WEB_TEMPLATE": "default",
        "BACKEND_TEMPLATE": "",
        "PROXY_TEMPLATE": "default",
        "DNS_TEMPLATE": "default",
        "WEB_DOMAINS": "100",
        "WEB_ALIASES": "100",
        "DNS_DOMAINS": "100",
        "DNS_RECORDS": "100",
        "MAIL_DOMAINS": "100",
        "MAIL_ACCOUNTS": "100",
        "DATABASES": "100",
        "CRON_JOBS": "100",
        "DISK_QUOTA": "unlimited",
        "BANDWIDTH": "100000",
        "NS": "ns1.domain.tld,ns2.domain.tld",
        "SHELL": "bash",
        "BACKUPS": "3",
        "CONTACT": "info@madeit.be",
        "CRON_REPORTS": "yes",
        "RKEY": "rmiIxRSGKU",
        "SUSPENDED": "no",
        "SUSPENDED_USERS": "0",
        "SUSPENDED_WEB": "0",
        "SUSPENDED_DNS": "0",
        "SUSPENDED_MAIL": "0",
        "SUSPENDED_DB": "0",
        "SUSPENDED_CRON": "0",
        "IP_AVAIL": "0",
        "IP_OWNED": "1",
        "IPV6_AVAIL": "1",
        "IPV6_OWNED": "1",
        "U_USERS": "9",
        "U_DISK": "4",
        "U_DISK_DIRS": "2",
        "U_DISK_WEB": "1",
        "U_DISK_MAIL": "0",
        "U_DISK_DB": "1",
        "U_BANDWIDTH": "0",
        "U_WEB_DOMAINS": "1",
        "U_WEB_SSL": "0",
        "U_WEB_ALIASES": "3",
        "U_DNS_DOMAINS": "2",
        "U_DNS_RECORDS": "26",
        "U_MAIL_DOMAINS": "1",
        "U_MAIL_DKIM": "1",
        "U_MAIL_ACCOUNTS": "2",
        "U_DATABASES": "1",
        "U_CRON_JOBS": "13",
        "U_BACKUPS": "3",
        "LANGUAGE": "en",
        "TIME": "16:33:45",
        "DATE": "2018-01-13"
        },
    "dns-cluster": {
        "FNAME": "DNS",
        "LNAME": "Cluster",
        "PACKAGE": "default",
        "WEB_TEMPLATE": "default",
        "BACKEND_TEMPLATE": "",
        "PROXY_TEMPLATE": "default",
        "DNS_TEMPLATE": "default",
        "WEB_DOMAINS": "100",
        "WEB_ALIASES": "100",
        "DNS_DOMAINS": "100",
        "DNS_RECORDS": "100",
        "MAIL_DOMAINS": "100",
        "MAIL_ACCOUNTS": "100",
        "DATABASES": "100",
        "CRON_JOBS": "100",
        "DISK_QUOTA": "unlimited",
        "BANDWIDTH": "100000",
        "NS": "ns1.domain.tld,ns2.domain.tld",
        "SHELL": "nologin",
        "BACKUPS": "3",
        "CONTACT": "info@madeit.be",
        "CRON_REPORTS": "yes",
        "RKEY": "evDUYXaK1r",
        "SUSPENDED": "no",
        "SUSPENDED_USERS": "0",
        "SUSPENDED_WEB": "0",
        "SUSPENDED_DNS": "0",
        "SUSPENDED_MAIL": "0",
        "SUSPENDED_DB": "0",
        "SUSPENDED_CRON": "0",
        "IP_AVAIL": "1",
        "IP_OWNED": "0",
        "IPV6_AVAIL": "0",
        "IPV6_OWNED": "0",
        "U_USERS": "0",
        "U_DISK": "1",
        "U_DISK_DIRS": "1",
        "U_DISK_WEB": "0",
        "U_DISK_MAIL": "0",
        "U_DISK_DB": "0",
        "U_BANDWIDTH": "0",
        "U_WEB_DOMAINS": "0",
        "U_WEB_SSL": "0",
        "U_WEB_ALIASES": "0",
        "U_DNS_DOMAINS": "1",
        "U_DNS_RECORDS": "18",
        "U_MAIL_DOMAINS": "0",
        "U_MAIL_DKIM": "0",
        "U_MAIL_ACCOUNTS": "0",
        "U_DATABASES": "0",
        "U_CRON_JOBS": "0",
        "U_BACKUPS": "3",
        "LANGUAGE": "en",
        "TIME": "16:55:23",
        "DATE": "2018-01-13"
        }
}';
        $response = new Response(200, ['Content-Type' => 'application/json'], $body);
        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $vestacp->setClient($client);

        $user = $vestacp->user();
        $response = $user->listUsers();

        $this->assertEquals(2, count($response));
        $this->assertEquals('admin', $response[0]->getUsername());
    }

    //v-list-user
    public function testListUser()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '{
    "admin": {
        "FNAME": "System",
        "LNAME": "Administrator",
        "PACKAGE": "default",
        "WEB_TEMPLATE": "default",
        "BACKEND_TEMPLATE": "",
        "PROXY_TEMPLATE": "default",
        "DNS_TEMPLATE": "default",
        "WEB_DOMAINS": "100",
        "WEB_ALIASES": "100",
        "DNS_DOMAINS": "100",
        "DNS_RECORDS": "100",
        "MAIL_DOMAINS": "100",
        "MAIL_ACCOUNTS": "100",
        "DATABASES": "100",
        "CRON_JOBS": "100",
        "DISK_QUOTA": "unlimited",
        "BANDWIDTH": "100000",
        "NS": "ns1.domain.tld,ns2.domain.tld",
        "HOME": "/home/admin",
        "SHELL": "bash",
        "BACKUPS": "3",
        "CONTACT": "info@madeit.be",
        "CRON_REPORTS": "yes",
        "RKEY": "rmiIxRSGKU",
        "SUSPENDED": "no",
        "SUSPENDED_USERS": "0",
        "SUSPENDED_WEB": "0",
        "SUSPENDED_DNS": "0",
        "SUSPENDED_MAIL": "0",
        "SUSPENDED_DB": "0",
        "SUSPENDED_CRON": "0",
        "IP_AVAIL": "0",
        "IP_OWNED": "1",
        "IPV6_AVAIL": "1",
        "IPV6_OWNED": "1",
        "U_USERS": "9",
        "U_DISK": "4",
        "U_DISK_DIRS": "2",
        "U_DISK_WEB": "1",
        "U_DISK_MAIL": "0",
        "U_DISK_DB": "1",
        "U_BANDWIDTH": "0",
        "U_WEB_DOMAINS": "1",
        "U_WEB_SSL": "0",
        "U_WEB_ALIASES": "3",
        "U_DNS_DOMAINS": "2",
        "U_DNS_RECORDS": "26",
        "U_MAIL_DOMAINS": "1",
        "U_MAIL_DKIM": "1",
        "U_MAIL_ACCOUNTS": "2",
        "U_DATABASES": "1",
        "U_CRON_JOBS": "13",
        "U_BACKUPS": "3",
        "LANGUAGE": "en",
        "TIME": "16:33:45",
        "DATE": "2018-01-13"
        }
}';
        $response = new Response(200, ['Content-Type' => 'application/json'], $body);

        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $vestacp->setClient($client);

        $user = $vestacp->user();
        $response = $user->get('admin');

        $this->assertEquals('admin', $response->getUsername());
        $this->assertEquals('System', $response->getFirstName());
        $this->assertEquals('Administrator', $response->getLastName());
        $this->assertEquals('default', $response->getPackage());
        $this->assertEquals('default', $response->getWebTemplate());
        $this->assertEquals('', $response->getBackendTemplate());
        $this->assertEquals('default', $response->getProxyTemplate());
        $this->assertEquals('default', $response->getDnsTemplate());
        $this->assertEquals('100', $response->getPackageWebDomains());
        $this->assertEquals('100', $response->getPackageWebAliases());
        $this->assertEquals('100', $response->getPackageDnsDomains());
        $this->assertEquals('100', $response->getPackageDnsRecords());
        $this->assertEquals('100', $response->getPackageMailDomains());
        $this->assertEquals('100', $response->getPackageMailAccounts());
        $this->assertEquals('100', $response->getPackageDatabases());
        $this->assertEquals('100', $response->getPackageCronJobs());
        $this->assertEquals('unlimited', $response->getPackageDiskQuota());
        $this->assertEquals('100000', $response->getPackageBandwidth());
        $this->assertEquals('3', $response->getPackageBackups());
        $this->assertEquals('/home/admin', $response->getHome());
        $this->assertEquals('ns1.domain.tld,ns2.domain.tld', $response->getNs());
        $this->assertEquals('bash', $response->getShell());
        $this->assertEquals('info@madeit.be', $response->getContact());
        $this->assertEquals(true, $response->getCronReports());
        $this->assertEquals('rmiIxRSGKU', $response->getRkey());
        $this->assertEquals(false, $response->getSuspended());
        $this->assertEquals('0', $response->getSuspended_users());
        $this->assertEquals('0', $response->getSuspended_web());
        $this->assertEquals('0', $response->getSuspended_dns());
        $this->assertEquals('0', $response->getSuspended_mail());
        $this->assertEquals('0', $response->getSuspended_db());
        $this->assertEquals('0', $response->getSuspended_cron());
        $this->assertEquals('0', $response->getIpAvailable());
        $this->assertEquals('1', $response->getIpOwned());
        $this->assertEquals('1', $response->getIp6Available());
        $this->assertEquals('1', $response->getIp6Owned());
        $this->assertEquals('9', $response->getU_users());
        $this->assertEquals('4', $response->getU_disk());
        $this->assertEquals('2', $response->getU_disk_dirs());
        $this->assertEquals('1', $response->getU_disk_web());
        $this->assertEquals('1', $response->getU_disk_db());
        $this->assertEquals('0', $response->getU_bandwidth());
        $this->assertEquals('1', $response->getU_web_domains());
        $this->assertEquals('0', $response->getU_web_ssl());
        $this->assertEquals('3', $response->getU_web_aliases());
        $this->assertEquals('2', $response->getU_dns_domains());
        $this->assertEquals('26', $response->getU_dns_records());
        $this->assertEquals('1', $response->getU_mail_domains());
        $this->assertEquals('1', $response->getU_mail_dkim());
        $this->assertEquals('2', $response->getU_mail_accounts());
        $this->assertEquals('1', $response->getU_databases());
        $this->assertEquals('13', $response->getU_cron_jobs());
        $this->assertEquals('3', $response->getU_backups());
        $this->assertEquals('en', $response->getLanguage());
        $this->assertEquals('16:33:45', $response->getTime());
        $this->assertEquals('2018-01-13', $response->getDate());
    }

    //v-add-user
    public function testCreateUser()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '0';
        $response = new Response(200, [], $body);

        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $vestacp->setClient($client);

        $user = $vestacp->user();
        $response = $user->create('test', 'test', 'test123');

        $this->assertEquals(true, $response);
        $this->assertEquals(0, $user->getLastResultCode());
    }

    //v-add-user
    public function testCreateUserAllParams()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '0';
        $response = new Response(200, [], $body);

        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $vestacp->setClient($client);

        $user = $vestacp->user();
        $response = $user->create('test', 'test', 'test123', 'default', 'firstname', 'lastname');

        $this->assertEquals(true, $response);
        $this->assertEquals(0, $user->getLastResultCode());
    }
}
