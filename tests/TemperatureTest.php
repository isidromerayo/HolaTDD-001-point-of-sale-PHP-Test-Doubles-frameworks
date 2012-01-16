<?php

/**
 *
 * @author Isidro Merayo
 */

class TemperatureTest extends PHPUnit_Framework_TestCase {

    /**
     * @test 
     */
    public function getsAverageTemperatureFromThreeServiceReadings() {
        $service = Phake::mock('Service');
        Phake::when($service)->readTemp()->thenReturn(10)
                                            ->thenReturn(12)
                                            ->thenReturn(14);
        
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }

}
