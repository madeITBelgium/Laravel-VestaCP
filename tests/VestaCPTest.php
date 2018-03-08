<?php

use MadeITBelgium\VestaCP\VestaCP;

class VestaCPTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testConstructor()
    {
        $vestacp = new VestaCP('reseller', 'hash');
    }
}
