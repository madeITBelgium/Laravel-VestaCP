<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use MadeITBelgium\VestaCP\VestaCP;

class DatabaseTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testConstruct()
    {
        $vestacp = new VestaCP('server', 'hash');
        $database = $vestacp->database();

        $this->assertEquals($vestacp, $database->getVestaCP());
    }

    //v-add-database
    public function testCreateDatabase()
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

        $database = $vestacp->database();
        $response = $database->create('admin', 'test', 'test', 'test123');

        $this->assertEquals(true, $response);
    }

    //v-list-databases user
    public function testListDatabases()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '{
    "admin_wp": {
        "DATABASE": "admin_wp",
        "DBUSER": "admin_wp",
        "HOST": "localhost",
        "TYPE": "mysql",
        "CHARSET": "UTF8",
        "U_DISK": "15",
        "SUSPENDED": "no",
        "TIME": "18:47:49",
        "DATE": "2018-01-16"
    }
}';
        $response = new Response(200, ['Content-Type' => 'application/json'], $body);
        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $vestacp->setClient($client);

        $database = $vestacp->database();
        $response = $database->listDatabases('admin');

        $this->assertEquals(1, count($response));
        $this->assertEquals('admin_wp', $response[0]->getDatabase());
        $this->assertEquals('admin_wp', $response[0]->getDbuser());
        $this->assertEquals('localhost', $response[0]->getHost());
        $this->assertEquals('mysql', $response[0]->getType());
        $this->assertEquals('UTF8', $response[0]->getCharset());
        $this->assertEquals('15', $response[0]->getU_disk());
        $this->assertEquals(false, $response[0]->getSuspended());
        $this->assertEquals('18:47:49', $response[0]->getTime());
        $this->assertEquals('2018-01-16', $response[0]->getDate());
    }

    //v-list-database user database
    public function testListDatabase()
    {
        $vestacp = new VestaCP('server', 'hash');

        $body = '{
    "admin_wp": {
        "DATABASE": "admin_wp",
        "DBUSER": "admin_wp",
        "HOST": "localhost",
        "TYPE": "mysql",
        "CHARSET": "UTF8",
        "U_DISK": "15",
        "SUSPENDED": "no",
        "TIME": "18:47:49",
        "DATE": "2018-01-16"
    }
}';
        $response = new Response(200, ['Content-Type' => 'application/json'], $body);
        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $vestacp->setClient($client);

        $database = $vestacp->database();
        $response = $database->listDatabase('admin', 'admin_wp');

        $this->assertEquals('admin_wp', $response->getDatabase());
        $this->assertEquals('admin_wp', $response->getDbuser());
        $this->assertEquals('localhost', $response->getHost());
        $this->assertEquals('mysql', $response->getType());
        $this->assertEquals('UTF8', $response->getCharset());
        $this->assertEquals('15', $response->getU_disk());
        $this->assertEquals(false, $response->getSuspended());
        $this->assertEquals('18:47:49', $response->getTime());
        $this->assertEquals('2018-01-16', $response->getDate());
    }
}
