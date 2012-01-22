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
    
    public function testProcessSomeDataLogsExceptions() {
        $logger = Phake::mock('LOGGER');
        $data = Phake::mock('MyData');
        $processor = Phake::mock('MyDataProcessor');

        Phake::when($processor)->process($data)
                            ->thenThrow(new Exception('My error message!'));

        $sut = new MyClass($logger);
        $sut->processSomeData($processor, $data);

        //This comes from the exception we created above
        Phake::verify($logger)->log('My error message!');
    }
}

