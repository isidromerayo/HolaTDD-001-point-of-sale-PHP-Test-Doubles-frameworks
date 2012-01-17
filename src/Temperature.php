<?php

/**
 *
 * @author Isidro Merayo
 */
class Temperature {
    
    private $_service;
    
    public function __construct($service) {
        $this->_service = $service;
    }

    /**
     *
     * @return int 
     */
    public function average() {
        $total = 0;
        for ($i=0;$i<3;$i++) {
            $total += $this->_service->readTemp();
        }
        return $total/3;
    }
}
