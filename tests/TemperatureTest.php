<?php

/**
 *
 * @author Isidro Merayo
 */
use \Mockery as m;

class TemperatureTest extends PHPUnit_Framework_TestCase {

    /**
     * @test 
     */
    public function getsAverageTemperatureFromThreeServiceReadings() {
        $service = m::mock('Service');
        $service->shouldReceive('readTemp')->times(3)->andReturn(10, 12, 14);
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }

}
