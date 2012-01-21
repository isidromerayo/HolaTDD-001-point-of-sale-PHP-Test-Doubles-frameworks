<?php

class MyPhakeMockedClassTest extends PHPUnit_Framework_TestCase {

    public function testPHPUnitMock() {
        $mock = Phake::mock('MyPhakeMockedClass');

        $mock->fooWithArgument('bar');
        $mock->fooWithArgument('foo');

        Phake::inOrder(
        Phake::verify($mock)->fooWithArgument('foo'),
        Phake::verify($mock)->fooWithArgument('bar')
        );
    }
}

