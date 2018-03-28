<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use MadeITBelgium\VestaCP\VestaCP;

class DomainTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testConstruct()
    {
        $vestacp = new VestaCP('server', 'hash');
        $domain = $vestacp->domain();

        $this->assertEquals($vestacp, $domain->getVestaCP());
    }

    //v-add-domain
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

        $domain = $vestacp->domain();
        $response = $domain->create('admin', 'test.com');

        $this->assertEquals(true, $response);
    }

    //v-list-users
    public function testListWebDomains()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '{
    "server3.emeraldcloudhosting.com": {
        "IP": "209.250.249.53",
        "IP6": "2001:19f0:5001:722:5400:1ff:fe55:d9b2",
        "U_DISK": "1",
        "U_BANDWIDTH": "0",
        "TPL": "hosting",
        "ALIAS": "www.server3.emeraldcloudhosting.com,server3.ech.be,www.server3.ech.be",
        "STATS": "",
        "STATS_USER": "",
        "SSL": "no",
        "SSL_HOME": "same",
        "LETSENCRYPT": "no",
        "FTP_USER": "",
        "FTP_PATH": "",
        "AUTH_USER": "",
        "BACKEND": "",
        "PROXY": "hosting",
        "PROXY_EXT": "jpg,jpeg,gif,png,ico,svg,css,zip,tgz,gz,rar,bz2,doc,xls,exe,pdf,ppt,txt,odt,ods,odp,odf,tar,wav,bmp,rtf,js,mp3,avi,mpeg,flv,html,htm",
        "SUSPENDED": "no",
        "TIME": "16:33:48",
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

        $domain = $vestacp->domain();
        $response = $domain->listWebDomains('admin');

        $this->assertEquals(1, count($response));
        $this->assertEquals('server3.emeraldcloudhosting.com', $response[0]->getDomainname());
        $this->assertEquals('209.250.249.53', $response[0]->getIp());
        $this->assertEquals('2001:19f0:5001:722:5400:1ff:fe55:d9b2', $response[0]->getIp6());
        $this->assertEquals('1', $response[0]->getUDisk());
        $this->assertEquals('0', $response[0]->getUBandwidth());
        $this->assertEquals('hosting', $response[0]->getTemplate());
        $this->assertEquals('www.server3.emeraldcloudhosting.com,server3.ech.be,www.server3.ech.be', $response[0]->getAlias());
        $this->assertEquals('', $response[0]->getStats());
        $this->assertEquals('', $response[0]->getStatsUser());
        $this->assertEquals(false, $response[0]->getSsl());
        $this->assertEquals('same', $response[0]->getSslHome());
        $this->assertEquals(false, $response[0]->getLetsencrypt());
        $this->assertEquals('', $response[0]->getFtp_user());
        $this->assertEquals('', $response[0]->getFtp_path());
        $this->assertEquals('', $response[0]->getAuth_user());
        $this->assertEquals('', $response[0]->getBackend());
        $this->assertEquals('hosting', $response[0]->getProxy());
        $this->assertEquals('jpg,jpeg,gif,png,ico,svg,css,zip,tgz,gz,rar,bz2,doc,xls,exe,pdf,ppt,txt,odt,ods,odp,odf,tar,wav,bmp,rtf,js,mp3,avi,mpeg,flv,html,htm', $response[0]->getProxyExt());
        $this->assertEquals(false, $response[0]->getSuspended());
        $this->assertEquals('16:33:48', $response[0]->getTime());
        $this->assertEquals('2018-01-13', $response[0]->getDate());
    }

    //v-list-web-domain domain
    public function testListWebDomain()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '{
    "server3.emeraldcloudhosting.com": {
        "IP": "209.250.249.53",
        "IP6": "2001:19f0:5001:722:5400:1ff:fe55:d9b2",
        "U_DISK": "1",
        "U_BANDWIDTH": "0",
        "TPL": "hosting",
        "ALIAS": "www.server3.emeraldcloudhosting.com,server3.ech.be,www.server3.ech.be",
        "STATS": "",
        "STATS_USER": "",
        "SSL": "no",
        "SSL_HOME": "same",
        "LETSENCRYPT": "no",
        "FTP_USER": "",
        "FTP_PATH": "",
        "AUTH_USER": "",
        "BACKEND": "",
        "PROXY": "hosting",
        "PROXY_EXT": "jpg,jpeg,gif,png,ico,svg,css,zip,tgz,gz,rar,bz2,doc,xls,exe,pdf,ppt,txt,odt,ods,odp,odf,tar,wav,bmp,rtf,js,mp3,avi,mpeg,flv,html,htm",
        "SUSPENDED": "no",
        "TIME": "16:33:48",
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

        $domain = $vestacp->domain();
        $response = $domain->listWebDomain('admin', 'server3.emeraldcloudhosting.com');

        $this->assertEquals('server3.emeraldcloudhosting.com', $response->getDomainname());
        $this->assertEquals('209.250.249.53', $response->getIp());
        $this->assertEquals('2001:19f0:5001:722:5400:1ff:fe55:d9b2', $response->getIp6());
        $this->assertEquals('1', $response->getUDisk());
        $this->assertEquals('0', $response->getUBandwidth());
        $this->assertEquals('hosting', $response->getTemplate());
        $this->assertEquals('www.server3.emeraldcloudhosting.com,server3.ech.be,www.server3.ech.be', $response->getAlias());
        $this->assertEquals('', $response->getStats());
        $this->assertEquals('', $response->getStatsUser());
        $this->assertEquals(false, $response->getSsl());
        $this->assertEquals('same', $response->getSslHome());
        $this->assertEquals(false, $response->getLetsencrypt());
        $this->assertEquals('', $response->getFtp_user());
        $this->assertEquals('', $response->getFtp_path());
        $this->assertEquals('', $response->getAuth_user());
        $this->assertEquals('', $response->getBackend());
        $this->assertEquals('hosting', $response->getProxy());
        $this->assertEquals('jpg,jpeg,gif,png,ico,svg,css,zip,tgz,gz,rar,bz2,doc,xls,exe,pdf,ppt,txt,odt,ods,odp,odf,tar,wav,bmp,rtf,js,mp3,avi,mpeg,flv,html,htm', $response->getProxyExt());
        $this->assertEquals(false, $response->getSuspended());
        $this->assertEquals('16:33:48', $response->getTime());
        $this->assertEquals('2018-01-13', $response->getDate());
    }

    //v-add-web-domain-ftp
    public function testCreateFTPUser()
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

        $domain = $vestacp->domain();
        $response = $domain->createFtp('admin', 'test.com', 'test', 'test123');

        $this->assertEquals(true, $response);
    }

    //v-change-web-domain-ftp-password
    public function testChangeFTPUserPassword()
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

        $domain = $vestacp->domain();
        $response = $domain->changeFtpPassword('admin', 'test.com', 'admin_test', 'test123');

        $this->assertEquals(true, $response);
    }

    //v-delete-web-domain-ftp
    public function testDeleteFTPUser()
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

        $domain = $vestacp->domain();
        $response = $domain->deleteFtpUser('admin', 'test.com', 'admin_test');

        $this->assertEquals(true, $response);
    }
}
