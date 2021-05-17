<?php

    require "class/Ovoce.php";
    require "class/Bobuloviny.php";
    require "class/Jadroviny.php";
    require "class/Peckoviny.php";

    /**
     * Jablko
     *
     * Jablko je ovoce, které patří mezi jádroviny. Vytvoříme nový objekt jablko
     * zelené barvy. Zobrazíme informace o jablku. Změníme barvu jablka na
     * žlutozelenou a opět zobrazíme informace o jablku.
     */
    $jablko = new Jadroviny("jablko", "zelená"); // nový objekt třídy Jadroviny
    echo $jablko; // výpis objektu v podobě textu pomocí magické metody __toString()
    $jablko->setColor("žlutozelená"); // změna atributu barva pomocí metody (setteru) setColor
    echo $jablko; // výpis objektu v podobě textu pomocí magické metody __toString()

    /**
     * Klon jablka (kopie)
     *
     * Vytvoříme klon (kopii) jablka. Vznikne nové jablko s identickými vlastnostmi
     * jako u původního jablka.
     */
    $jablko2 = clone $jablko;
    echo $jablko2;

    /**
     * Hruška
     *
     * Hruška je ovoce, které patří také mezi jádroviny. Vytvoříme nový objekt hruška
     * zelené barvy. Zobrazíme informace o hrušce.
     */
    $hruska = new Jadroviny("hruška", "zelená"); // nový objekt třídy Jadroviny
    echo $hruska; // výpis objektu v podobě textu pomocí magické metody __toString()

    $bluma = new Peckoviny("bluma", "modrá");
    echo $bluma;

    /**
     * Zánik jablka
     *
     * Jablko zanikne v okamžiku, kdy na něj přestane existovat reference ("sníme ho").
     * Klon jablka ale nezanikne, jde o samostatný objekt.
     */
    $jablko = null;
    echo $jablko . "Snědli jsme jablko, zaniklo.<hr>";
    echo $jablko2;
?>