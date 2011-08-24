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
        $catalog = Phake::mock('Catalog');
        $pointOfSale = new PointOfSale($catalog);
        
        $pointOfSale->onBarcode('123');
        
        // verify(catalog).search("123");
        Phake::verify($catalog)->search('123');
    }
    
    /**
     * @test
     */
    public function onBarcode_show_price() 
    {
        $screen = Phake::mock('Screen');
        $catalog = Phake::mock('Catalog');
        $pointOfSale = new PointOfSale($catalog);
        
        $pointOfSale->onBarcode('123');
        
        // when(catalog.search("123").thenReturn("1€")
        
        // verify(screen).show("1€");
        Phake::verify($screen)->show('1€');
    }
}
