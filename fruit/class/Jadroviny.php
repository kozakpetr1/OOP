<?php

/**
 * Jadroviny
 * 
 * Potomek třídy Ovoce.
 * Implementuje rozhraní iOvoce.
 */
class Jadroviny extends Ovoce implements iOvoce {

    public function __toString()
    {
        return parent::__toString() . "Ovoce patří mezi jádroviny.<hr>" . PHP_EOL;
    }
}

?>