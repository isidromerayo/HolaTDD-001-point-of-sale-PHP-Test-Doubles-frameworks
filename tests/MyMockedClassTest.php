<?php

class MyMockedClassTest extends PHPUnit_Framework_TestCase {

    public function testPHPUnitMock() 
    {
        $mock = $this->getMock('MyMockedClass');

        $mock->expects($this->at(0))->method('fooWithArgument')->with('foo');
        $mock->expects($this->at(1))->method('fooWithArgument')->with('bar');

        $mock->fooWithArgument('foo');
        $mock->fooWithArgument('bar');
    }
    
    /**
     * @expectedException RuntimeException 
     */
    public function testThrowExceptionStub()
    {
        $stub = $this->getMock('SomeClass');
 
        $stub->expects($this->any())
             ->method('doSomething')
             ->will($this->throwException(new RuntimeException));
 
        $stub->doSomething();
    }
}
