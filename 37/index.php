<?php

class Product {
	public $title, 
				 $author,
				 $publisher;
				 
	private $price;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	//1. we move to here from class Game. This will make us have access to the price. We can access the private $price; only in class Product
	//we add complexity at 38
	public function getPrice(){
		return $this->price;
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
	public $totalPages;
  public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, 
	$totalPages = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalPages = $totalPages;
		
	}

	public function getInfoProduct(){ 
		$str = "Comic : " . parent::getInfoProduct() . " - {$this->totalPages} Pages.";
		return $str;
	}
}

class Game extends Product {
	public $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price", 
	$totalHours = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalHours = $totalHours;
	}

	//1. we move the code below to class Product to make the private $price works
	// public function getPrice(){
	// 	return $this->price;
	// }

	public function getInfoProduct()
	{
		$str = "Game :  " . parent::getInfoProduct() . " - {$this->totalHours} Hours.";
		return $str;
	}
}

class PrintProductInfo {
	public function print(Product $product){
		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
		return $str;
	}
}

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";

echo $product2->getPrice();