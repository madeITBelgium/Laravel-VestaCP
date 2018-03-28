<?php

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use MadeITBelgium\VestaCP\VestaCP;

class VestaCPTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testConstructor()
    {
        $vestacp = new VestaCP('server', 'hash');
        $client = new Client();
        $vestacp->setClient($client);

        $this->assertEquals($vestacp->getClient(), $client);
        
        $client = new Client();
        $vestacp = new VestaCP('server', 'hash', $client);

        $this->assertEquals($vestacp->getClient(), $client);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerErrorException() {
        $client = $this->createClient(500);
        $vestacp = new VestaCP('server', 'hash', $client);

        $domain = $vestacp->domain();
        $response = $domain->create('admin', 'test.com');
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode1() {
        $this->returnCode(1);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode2() {
        $this->returnCode(2);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode3() {
        $this->returnCode(3);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode4() {
        $this->returnCode(4);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode5() {
        $this->returnCode(5);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode6() {
        $this->returnCode(6);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode7() {
        $this->returnCode(7);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode8() {
        $this->returnCode(8);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode9() {
        $this->returnCode(9);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode10() {
        $this->returnCode(10);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode11() {
        $this->returnCode(11);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode12() {
        $this->returnCode(12);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode13() {
        $this->returnCode(13);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode14() {
        $this->returnCode(14);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode15() {
        $this->returnCode(15);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode16() {
        $this->returnCode(16);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode17() {
        $this->returnCode(17);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode18() {
        $this->returnCode(18);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode19() {
        $this->returnCode(19);
    }
    
     /**
     * @expectedException Exception
     */
    public function testServerReturnCode20() {
        $this->returnCode(20);
    }
    
    private function returnCode($code) {
        $client = $this->createClient(200, $code);
        $vestacp = new VestaCP('server', 'hash', $client);

        $domain = $vestacp->domain();
        $response = $domain->create('admin', 'test.com');
        
        $this->assertEquals($vestacp->getLastResultCode(), $code);
    }
    
    private function createClient($responseCode, $body = '0') {
        $response = new Response($responseCode, [], $body);

        $mock = new MockHandler([
            $response,
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        
        return $client;
    }
}
