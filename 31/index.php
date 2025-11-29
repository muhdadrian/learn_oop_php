<?php

//Overriding

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price,
				 $totalPages,
				 $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price", $totalPages = 0, $totalHours = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPages = $totalPages;
		$this->totalHours = $totalHours;
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

	public function getInfoProduct() {
		$str = "{$this->title} | {$this->getLabel()} (RM{$this->price})";
		return $str;
	}
}

class Comic extends Product {
	//1. we use parent keyword below to tell that we are going to use parent's getInfoProduct above.
	//2. getInfoProduct() - the round bracket shown that it's a method.
	//3. In inheritance, it's better to create a special variable here. Go to 32
	public function getInfoProduct(){ 
		$str = "Comic : " . parent::getInfoProduct() . " - {$this->totalPages} Pages.";
		return $str;
	}
}

class Game extends Product {
	public function getInfoProduct()
	{
		$str = "Game :  " . parent::getInfoProduct() . " - {$this->totalHours} Hours.";
		return $str;
	}
}

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
// 		return $str;
// 	}
// }

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
