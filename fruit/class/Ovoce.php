<?php
 
 /**
 * Rozhraní ovoce
 * 
 * Rozhraní pro ovoce (iOvoce) obsahuje seznam metod,
 * jejichž exitenci garantuje.
 */
interface iOvoce {

	/**
     * Nazev - getter
	 *
     * Veřejná metoda vrací název ovoce.
     * @return string
     */
    public function getName(): string;

	/**
     * Barva - getter
     *
     * Veřejná metoda vrací barvu ovoce.
     * @return string
     */
    public function getColor(): string;

	/**
     * Nazev - setter
     *
     * Veřejná metoda přiřadí hodnotu parametru nazev do atributu nazev.
     * @param string $nazev
     * @return void
     */
	public function setName($nazev): void;

	/**
     * Barva - setter
     *
     * Veřejná metoda přiřadí hodnotu parametru barva do atributu barva.
     * @param string $barva
     * @return void
     */
	public function setColor($barva): void;
}

/**
 * Ovoce
 * 
 * Třída ovoce.
 * Implementuje rozhraní iOvoce.
 */
abstract class Ovoce implements iOvoce {

	/**
     * Název ovoce
     *
     * Chráněný atribut, který obsahuje název ovoce.
     * Každý objekt má svou vlastní hodnotu atributu.
     * @var string
     */
	protected $nazev;

	/**
     * Barva ovoce
     *
     * Chráněný atribut, který obsahuje informaci o barvě ovoce.
     * Každý objekt má svou vlastní hodnotu atributu.
     * @var string
     */
    protected $barva;

    /**
     * Počet objektů
     * 
     * Statický atribut třídy, který je společný pro všechny
     * vytvořené objekty. Obsahuje hodnotu aktuálního počtu objektů.
     * @var int
     */
    protected static $pocet = 0;

    /**
     * Konstruktor
     * 
     * Magická metoda, která je spuštěna při vytvoření nového objektu.
     * @param string $nazev
     * @param string $barva
     */
    public function __construct($nazev, $barva) {
		$this->nazev = $nazev; // předání hodnoty parametru $nazev atributu $nazev
		$this->barva = $barva; // předání hodnoty parametru $barva atributu $barva
        self::$pocet++; // zvýšení hodnoty statického atributu $pocet o 1 (inkrementace)
	}
	
	public function getName(): string
	{
		return $this->nazev;
	}
	
	public function getColor(): string
	{
		return $this->barva;
	}
	
    public static function getCount(): int
    {
        return self::$pocet;
    }

    public function setName($nazev): void
	{
		$this->nazev = $nazev;
	}

	public function setColor($barva): void
	{
		$this->barva = $barva;
	}

    /**
     * Reprezentace objektu v podobě řetězce
     *
     * Magická metoda, jejíž výsledek se použije,
	 * když je s objektem manipulováno jako s textem.
     * @return string
     */
    public function __toString()
    {
        return "Počet kusů ovoce je nyní " . $this->getCount() . ".<br> Ovoce se jmenuje " . $this->nazev . ". Jeho barva je " . $this->barva . ".<br>" . PHP_EOL;
    }

    /**
     * Klonování (kopie)
     * 
     * Magická metoda, která je spuštěna v okamžiku, kdy
     * je objekt klonován (vytvářena jeho kopie).
     */
    public function __clone() {
        self::$pocet++; // zvýšení hodnoty statického atributu $pocet o 1 (inkrementace)
	}

    /**
     * Destruktor
     * 
     * Magická metoda, která je spuštěna v okamžiku, kdy
     * je objekt rušen.
     */
    public function __destruct() {
        self::$pocet--; // snížení hodnoty statického atributu $pocet o 1 (dekrementace)
	}
}

?>