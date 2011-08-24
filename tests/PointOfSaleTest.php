<?php

/**
 *
 * @author Isidro Merayo
 */
use \Mockery as m;

class PointOfSaleTest extends PHPUnit_Framework_TestCase {
 
    /**
     * @test
     */
    public function onBarcode_search_catalog()
    {
        $catalog = m::mock('Catalog');
        $pointOfSale = new PointOfSale($catalog);
        
        // verify(catalog).search("123");
        $catalog->shouldReceive('search')->once()->with('123');
        
        $pointOfSale->onBarcode('123');
        
    }
    
    /**
     * @test
     */
    public function onBarcode_show_price() 
    {
        $screen = m::mock('Screen');
        $catalog = m::mock('Catalog');
        
        $catalog->shouldReceive('search');
        
        $pointOfSale = new PointOfSale($catalog);
        
        // verify(screen).show("1€");
        $screen->shouldReceive('show')->with('1€')->once();
        
        $pointOfSale->onBarcode('123');
    }
    
    public function teardown() 
    {
        m::close();
    }
}
