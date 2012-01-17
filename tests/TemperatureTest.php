<?php


class TemperatureTest extends PHPUnit_Framework_TestCase {

   /**
     * @test
     */
    public function getsAverageTemperatureFromThreeServiceReadings() {
        $service = Phockito::mock('Service');
        Phockito::when($service->readTemp())->return(10)->return(12)->return(14);
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    } 
}

