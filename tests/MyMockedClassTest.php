<?php

class MyMockedClassTest extends PHPUnit_Framework_TestCase {

    public function testPHPUnitMock() {
        $mock = Phake::mock('MyMockedClass');

        $mock->fooWithArgument('foo');
        $mock->fooWithArgument('bar');

        Phake::inOrder(
        Phake::verify($mock)->fooWithArgument('foo'),
        Phake::verify($mock)->fooWithArgument('bar')
        );
    }
}

