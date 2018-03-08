<?php

use MadeITBelgium\VestaCP\VestaCP;

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

        $domainbox->setClient(null);

        $user = $domainbox->user();
        $response = $user->listUsers();

        $this->assertEquals(1, count($response));
        $this->assertEquals('admin', $response[0]->getUsername());
    }
}
