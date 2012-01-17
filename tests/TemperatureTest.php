<?php


class TemperatureTest extends PHPUnit_Framework_TestCase {

   /**
     * @test
     */
    public function getsAverageTemperatureFromThreeServiceReadings() {
        $this->markTestSkipped();
        // $service = \Mockery::mock('service');
        // $service->shouldReceive('readTemp')->times(3)->andReturn(10, 12, 14);
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    } 
}
