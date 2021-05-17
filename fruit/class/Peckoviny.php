<?php

/**
 * Peckoviny
 * 
 * Potomek třídy Ovoce.
 * Implementuje rozhraní iOvoce.
 */
class Peckoviny extends Ovoce implements iOvoce {

    public function __toString()
    {
        return parent::__toString() . "Ovoce patří mezi peckoviny.<hr>" . PHP_EOL;
    }
}

?>