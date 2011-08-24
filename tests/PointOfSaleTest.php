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
        $screen = $this->getMock('Screen');
        
        $pointOfSale = new PointOfSale($catalog, $screen);
        
        // verify(catalog).search("123");
        $catalog->expects($this->once())->method('search')->with('123');
                
        $pointOfSale->onBarcode('123');
    }
    /**
     * @test
     */
    public function onBarcode_show_price() {
        $catalog = $this->getMock('Catalog');
        $screen = $this->getMock('Screen');
        
        // when(catalog.search("123").thenReturn("1€")
        $catalog->expects($this->once())
                ->method('search')
                ->with('123')
                ->will($this->returnValue('1€'));
                
        $pointOfSale = new PointOfSale($catalog, $screen);
        
        // verify(screen).show("1€");
        $screen->expects($this->once())
                ->method('show')
                ->with('1€');
                
        $pointOfSale->onBarcode('123');
    }
}
