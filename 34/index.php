<?php

class Product {
	public $title, 
				 $author,
				 $publisher;
				 
	protected $price;//1. we change this to protected

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
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

	//2. make a method in class Game. To display this go to 35
	public function getPrice(){
		return $this->price;
	}

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

$product2->price = 1.50;//1. this will no longer work or can change the price after we change the price to protected above. The output is error. But, the problem now is you cannot display the price, as the price is protected. If you use protected, the one that has access to the price is only within the class and its descendants (class Product and its children: class Comic and class Game). 
//2. To access the price, we make a method 
echo $product2->price;