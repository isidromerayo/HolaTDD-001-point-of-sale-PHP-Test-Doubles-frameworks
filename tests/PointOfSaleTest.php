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
        $catalog = $this->getMock('Catalog');
        $pointOfSale = new PointOfSale($catalog);
        
        // verify(catalog).search("123");
        $catalog->expects($this->once())->method('search')->with('123');
                
        $pointOfSale->onBarcode('123');
    }
}
