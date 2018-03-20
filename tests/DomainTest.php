<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use MadeITBelgium\VestaCP\VestaCP;

class DomainTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }
    
    //v-add-domain
    public function testCreateUser()
    {
        $domainbox = new VestaCP('server', 'hash');

        $body = '0';
        $response = new Response(200, [], $body);

        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $domainbox->setClient($client);

        $domain = $domainbox->domain();
        $response = $domain->create('admin', 'test.com');

        $this->assertEquals(true, $response);
    }
}
