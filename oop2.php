<?php

/**
 * DocBlock
 * 
 * DocBlock speciálně formátovaný komentář specifikovaný ve zdrojovém kódu,
 * který se používá k dokumentaci konkrétního segmentu kódu.
 */

 /**
 * Rozhraní ovoce
 * 
 * Rozhraní pro ovoce (iFruit) obsahuje seznam metod,
 * jejichž exitenci garantuje.
 */
interface iFruit {

	/**
     * Name getter
	 *
     * Veřejná metoda vrací název ovoce.
     * @return string
     */
    public function getName(): string;

	/**
     * Color getter
     *
     * Veřejná metoda vrací barvu ovoce.
     * @return string
     */
    public function getColor(): string;

	/**
     * Name setter
     *
     * Veřejná metoda přiřadí hodnotu parametru name do atributu name.
     * @param string $name
     * @return void
     */
	public function setName($name): void;

	/**
     * Color setter
     *
     * Veřejná metoda přiřadí hodnotu parametru color do atributu color.
     * @param string $color
     * @return void
     */
	public function setColor($color): void;
}

/**
 * Ovoce
 * 
 * Třída ovoce.
 * Implementuje rozhraní iFruit.
 */
class Fruit implements iFruit {

	// vlastnosti třídy Fruit
	protected $name;
	protected $color;

	// implementace metod třídy Fruit
	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	}
	
	public function getName(): string
	{
		return 'Fruit: ' . $this->name . '<br>' . PHP_EOL;
	}
	
	public function getColor(): string
	{
		return 'Fruit color: ' . $this->color . '<br>' . PHP_EOL;
	}
	
	public function setName($name): void
	{
		$this->name = $name;
	}

	public function setColor($color): void
	{
		$this->color = $color;
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
        return "Ovoce se jmenuje " . $this->name . ". Jeho barva je " . $this->color . ".<br>" . PHP_EOL;
    }
}

/**
 * Bobuloviny
 * 
 * Potomek třídy Fruit.
 * Implementuje rozhraní iFruit.
 */
class Berries extends Fruit implements iFruit {

	public function getName(): string
	{
		return 'Berry: ' . $this->name . '<br>' . PHP_EOL;
	}
	
	public function getColor(): string
	{
		return 'Berry color: ' . $this->color . '<br>' . PHP_EOL;
	}	
}

// vytvoření nové instance $apple (objektu $apple) třídy Fruit
$apple = new Fruit('Apple', 'red');

echo $apple->getName(); // výpis atributu name pomocí Name getteru
echo $apple->getColor(); // výpis atributu color pomocí Color getteru
echo $apple; // výpis reprezentace objektu v podobě textového řetězce

// vytvoření nové instance $berry (objektu $pear) třídy Berries,
// která je potomkem třídy Fruit
$berry = new Berries('Strawberry', 'red');

echo $berry->getName(); // výpis atributu name pomocí Name getteru
echo $berry->getColor(); // výpis atributu color pomocí Color getteru
echo $berry; // výpis reprezentace objektu v podobě textového řetězce
?>