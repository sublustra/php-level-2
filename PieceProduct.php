<?php
class PieceProduct extends Product
{
	private $count;
	
	public function __construct($name, $price, $count)
	{
		parent::__construct($name, $price);
		$this->count = $count;
	}
	
	public function getFinalCost(): int
	{
		return $this->price * $this->count;
	}
}