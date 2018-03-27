<?php

use Illuminate\Validation\Factory;
use MadeITBelgium\VestaCP\Validation\ValidatorExtensions;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testValidatorUserTrue()
    {
        $validator = new MadeITBelgium\VestaCP\Validation\Validator();
        $this->assertTrue($validator->isUser('user'));
    }

    public function testValidatorUserFalse()
    {
        $validator = new MadeITBelgium\VestaCP\Validation\Validator();
        $this->assertFalse($validator->isUser('user false'));
    }

    public function testValidUser()
    {
        $validator = Mockery::mock('MadeITBelgium\VestaCP\Validation\Validator');
        $extensions = new ValidatorExtensions($validator);
        $container = Mockery::mock('Illuminate\Container\Container');
        $translator = Mockery::mock('Illuminate\Contracts\Translation\Translator');
        $container->shouldReceive('make')->once()->with('MadeITBelgium\VestaCP\Validation\ValidatorExtensions')->andReturn($extensions);
        $validator->shouldReceive('isUser')->once()->with('user')->andReturn(true);
        $factory = new Factory($translator, $container);
        $factory->extend('user', 'MadeITBelgium\VestaCP\Validation\ValidatorExtensions@validateUser', ':attribute must be a valid user');
        $validator = $factory->make(['foo' => 'user'], ['foo' => 'user']);
        $this->assertTrue($validator->passes());
    }

    public function testValidUserFails()
    {
        $validator = Mockery::mock('MadeITBelgium\VestaCP\Validation\Validator');
        $extensions = new ValidatorExtensions($validator);
        $container = Mockery::mock('Illuminate\Container\Container');
        $translator = Mockery::mock('Illuminate\Contracts\Translation\Translator');
        $container->shouldReceive('make')->once()->with('MadeITBelgium\VestaCP\Validation\ValidatorExtensions')->andReturn($extensions);
        $validator->shouldReceive('isUser')->once()->with('user false')->andReturn(false);
        $translator->shouldReceive('trans')->once()->with('validation.custom')->andReturn('validation.custom');
        $translator->shouldReceive('trans')->once()->with('validation.custom.foo.user')->andReturn('validation.custom.foo.user');
        $translator->shouldReceive('trans')->once()->with('validation.user')->andReturn('validation.user');
        $translator->shouldReceive('trans')->once()->with('validation.attributes')->andReturn('validation.attributes');
        $translator->shouldReceive('trans')->once()->with('validation.attributes.foo')->andReturn('validation.attributes.foo');
        $factory = new Factory($translator, $container);
        $factory->extend('user', 'MadeITBelgium\VestaCP\Validation\ValidatorExtensions@validateUser', ':attribute must be a valid user');
        $validator = $factory->make(['foo' => 'user false'], ['foo' => 'user']);
        $this->assertTrue($validator->fails());
        $messages = $validator->messages();
        $this->assertInstanceOf('Illuminate\Support\MessageBag', $messages);
        $this->assertEquals('foo must be a valid user', $messages->first('foo'));
    }

    public function testValidatorIpaddressTrue()
    {
        $validator = new MadeITBelgium\VestaCP\Validation\Validator();
        $this->assertTrue($validator->isValidIp('192.168.1.1'));
    }

    public function testValidatorIpaddressFalse()
    {
        $validator = new MadeITBelgium\VestaCP\Validation\Validator();

        $this->assertFalse($validator->isValidIp('192.168.1.256'));
        $this->assertFalse($validator->isValidIp('192.168.1 256'));
        $this->assertFalse($validator->isValidIp('256.256.256.256'));
        $this->assertFalse($validator->isValidIp('1.1.1.'));
        $this->assertFalse($validator->isValidIp('2.2.2'));
        $this->assertFalse($validator->isValidIp('2.2'));
    }
}
