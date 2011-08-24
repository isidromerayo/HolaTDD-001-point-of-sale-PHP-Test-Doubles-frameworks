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
        $screen = Phockito::mock('Screen');
        $catalog = Phockito::mock('Catalog');
        
        $pointOfSale = new PointOfSale($catalog, $screen);
        
        $pointOfSale->onBarcode('123');
        
        // verify(catalog).search("123");
        Phockito::verify($catalog)->search('123');
    }
    
    /**
     * @test
     */
    public function onBarcode_show_price() 
    {
        $screen = Phockito::mock('Screen');
        $catalog = Phockito::mock('Catalog');
        
        $pointOfSale = new PointOfSale($catalog , $screen);
        
        // when(catalog.search("123").thenReturn("1€")
        Phockito::when($catalog)->search('123')->return('1€');
        
        $pointOfSale->onBarcode('123');
        
        
        // verify(screen).show("1€");
        Phockito::verify($screen)->show('1€');
    }
}
