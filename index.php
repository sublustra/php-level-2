<?php 
include_once ("product.php");
include_once ("PieceProduct.php");
include_once ("DigitalProduct.php");
include_once ("WeightProduct.php");

/*abstract class Product
{
	protected $name;
	protected $price;
	
	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
	
	abstract public function getFinalCost(): float;
	
	public function getName()
	{
		return $this->name;
	}
}

class PieceProduct extends Product
{
	private $count;
	
	public function __construct($name, $price, $count)
	{
		parent::__construct($name, $price);
		$this->count = $count;
	}
	
	public function getFinalCost(): float
	{
		return $this->price * $this->count;
	}
}

class DigitalProduct extends Product
{
	public function __construct($name, $piecePrice)
	{
		parent::__construct($name, $piecePrice / 2);
	}
	
	public function getFinalCost(): float
	{
		return $this->price;
	}
}

class WeightProduct extends Product
{
	private $weight;
	
	public function __construct($name, $price, $weight)
	{
		parent::__construct($name, $price);
		$this->weight = $weight;
	}
	public function getFinalCost(): float
	{
		return $this->price * $this->weight;
	}
}
*/

$piecePrice = 200;
$products = [
	new PieceProduct('piece', $piecePrice, 3),
	new DigitalProduct('digit', $piecePrice),
	new WeightProduct('weight', 500, 1.5),
	];
	
	foreach ($products as $product) {
		echo $product->getName . ' цена ' . $product->getFinalCost, "\n";
	}
	