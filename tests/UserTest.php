<?php

use MadeITBelgium\VestaCP\VestaCP;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    //v-list-users
    public function testListUsers()
    {
        $domainbox = new VestaCP('server', 'hash');

        $body = GuzzleHttp\Stream\Stream::factory('{
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
}');
        $response = new Response(200, [], $body);
        
        $mock = new MockHandler([
            $response
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        
        $domainbox->setClient($client);

        $user = $domainbox->user();
        $response = $user->listUsers();

        $this->assertEquals(2, count($response));
        $this->assertEquals('admin', $response[0]->getUsername());
    }

    //v-list-user
    public function testListUser()
    {
        $domainbox = new VestaCP('server', 'hash');

        $body = GuzzleHttp\Stream\Stream::factory('{
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
        }
}');
        $response = new Response(200, [], $body);
        
        $mock = new MockHandler([
            $response
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        
        $domainbox->setClient($client);

        $user = $domainbox->user();
        $response = $user->get('admin');

        $this->assertEquals('admin', $response->getUsername());
    }
}
