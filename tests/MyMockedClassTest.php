<?php

class MyMockedClassTest extends PHPUnit_Framework_TestCase {

    public function testPHPUnitMock() 
    {
        $mock = $this->getMock('MyMockedClass');

        $mock->expects($this->at(0))->method('fooWithArgument')
            ->with('foo');

        $mock->expects($this->at(1))->method('fooWithArgument')
            ->with('bar');

        $mock->fooWithArgument('bar');
        $mock->fooWithArgument('foo');
        
    }
}
