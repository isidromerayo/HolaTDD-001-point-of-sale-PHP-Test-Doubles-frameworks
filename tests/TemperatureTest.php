<?php


class TemperatureTest extends PHPUnit_Framework_TestCase {

   /**
     * @test
     */
    public function getsAverageTemperatureFromThreeServiceReadings() {
        $this->markTestSkipped();
        $temperature = new Temperature($service);
        $this->assertEquals(12, $temperature->average());
    } 
}
