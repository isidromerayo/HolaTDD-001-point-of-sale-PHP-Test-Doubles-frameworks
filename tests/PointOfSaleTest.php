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
}
