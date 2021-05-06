<?php

// deklarace rozhraní třídy Fruit
interface iFruit {
    public function getName();
    public function getColor();
	public function setName($name);
	public function setColor($color);
}

// definice třídy Fruit
class Fruit implements iFruit {

	// vlastnosti třídy Fruit
	private $name;
	private $color;

	// implementace metod třídy Fruit
	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	}
	
	public function getName() {
		return $this->name . "<br>" . PHP_EOL;
	}
	
	public function getColor() {
		return $this->color . "<br>" . PHP_EOL;
	}
	
	public function setName($name) {
		$this->name = $name;
	}

	public function setColor($color) {
		$this->color = $color;
	}
}

// vytvoření nové instance $apple (objektu $apple) třídy Fruit
$apple = new Fruit("Apple", "red");

echo $apple->getName();
echo $apple->getColor();

$apple->setName("Red Delicious");
echo $apple->getName();
echo $apple->getColor();

// vytvoření nové instance $pear (objektu $pear) třídy Fruit
$pear = new Fruit("Pear", "yellow");

echo $pear->getName();
echo $pear->getColor();

$pear->setColor("green");
echo $pear->getName();
echo $pear->getColor();

?>