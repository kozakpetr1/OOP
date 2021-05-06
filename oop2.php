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
	protected $name;
	protected $color;

	// implementace metod třídy Fruit
	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	}
	
	public function getName() {
		return 'Fruit: ' . $this->name . '<br>' . PHP_EOL;
	}
	
	public function getColor() {
		return 'Fruit color: ' . $this->color . '<br>' . PHP_EOL;
	}
	
	public function setName($name) {
		$this->name = $name;
	}

	public function setColor($color) {
		$this->color = $color;
	}
}

class Berries extends Fruit {

	public function getName() {
		return 'Berry: ' . $this->name . '<br>' . PHP_EOL;
	}
	
	public function getColor() {
		return 'Berry color: ' . $this->color . '<br>' . PHP_EOL;
	}	
}
// vytvoření nové instance $apple (objektu $apple) třídy Fruit
$apple = new Fruit('Apple', 'red');

echo $apple->getName();
echo $apple->getColor();

// vytvoření nové instance $berry (objektu $pear) třídy Berries,
// která je potomkem třídy Fruit
$berry = new Berries('Strawberry', 'red');

echo $berry->getName();
echo $berry->getColor();

?>