<?php

class Bulka {    // первое задание
	
	public $id   // второе задание
	public $price
	public $color
	
	__construct($id, $price, $color){
	$this->id = $id;
	$this->price = $price;
	$this->color = $color;
	}
	function view_bulka(){
	echo "<h1>$this->price</h1><p>$this->color</p>"; // третье задание
	}
	
	class Baton extends Bulka {   // четвертое задание, $price для класса Baton будет в 2 раза больше
		public function bu() {
        echo  $price = $price * 2;
    }
		
	}


}

new Baton()


// пятое задание 1234
// шестое задание 1122
// седьмое задание выдает ошибку