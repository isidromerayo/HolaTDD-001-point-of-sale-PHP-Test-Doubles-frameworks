<?php

/**
 *
 * @author Isidro Merayo
 */
class PointOfSaleTest extends PHPUnit_Framework_TestCase {
 
    /**
     * @test
     */
    public function onBarcode_search_catalog()
    {
        $this->markTestSkipped();
        // Java Mockito
        // verify(catalog).search("123");
    }
    
    /**
     * @test
     */
    public function onBarcode_show_price() 
    {
        $this->markTestSkipped();
        // when(catalog.search("123").thenReturn("1€")
        // verify(screen).show("1€");
    }
}
