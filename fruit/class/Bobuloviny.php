<?php

/**
 * Bobuloviny
 * 
 * Potomek třídy Ovoce.
 * Implementuje rozhraní iOvoce.
 */
class Bobuloviny extends Ovoce implements iOvoce {

    public function __toString()
    {
        return parent::__toString() . "Ovoce patří mezi bobuloviny.<hr>" . PHP_EOL;
    }
}

?>