<?php
class DigitalProduct extends Product
{
	public function __construct($name, $piecePrice)
	{
		parent::__construct($name, $piecePrice / 2);
	}
	
	public function getFinalCost(): int
	{
		return $this->price;
	}
}