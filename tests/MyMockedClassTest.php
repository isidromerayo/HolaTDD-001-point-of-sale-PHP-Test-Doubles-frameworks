<?php

/**
 * @author Isidro Merayo
 */
use \Mockery as m;

class MyMockedClassTest extends PHPUnit_Framework_TestCase {

    public function testPHPUnitMock() {
        $mock = m::mock('MyMockedClass');

        $mock->shouldReceive('fooWithArgument')->with('foo')->ordered();
        $mock->shouldReceive('fooWithArgument')->with('bar')->ordered();
        
        $mock->fooWithArgument('bar');
        $mock->fooWithArgument('foo');
    }

}
