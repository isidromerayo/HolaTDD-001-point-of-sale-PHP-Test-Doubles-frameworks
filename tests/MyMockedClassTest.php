<?php

/**
 * @author Isidro Merayo
 */
class MyMockedClassTest extends PHPUnit_Framework_TestCase {

    public function testPHPUnitMock() {
        $mock = Phockito::mock('MyMockedClass');

        $mock->fooWithArgument('foo');
        $mock->fooWithArgument('bar');

        $this->markTestIncomplete('"ordered verification" not implement phockito');
    }

}

