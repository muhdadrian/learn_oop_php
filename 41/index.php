<?php

//Setter and Getter (Accessor Method) - related with Visibility

//Visibility:
//1. public - can be accessed anywhere even from outside the class
//2. protected - can be used in a class and its descendant.
//3. private - can be only used in a specific class 

//the property should be either protected or private

class Product {
	//1. we change the visibility below from public to private for $title, $author and $publisher.
	//it will not output error as we use it in class Product only
	private $title, 
				  $author,
				  $publisher;
	private	$discount = 0;
	private $price;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	public function getPrice(){
		return $this->price - ($this->price * $this->discount / 100);
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

	public function getInfoProduct() {
		$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
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

	public function setDiscount($discount){
		$this->discount = $discount;
	}

	public function getInfoProduct()
	{
		$str = "Game :  " . parent::getInfoProduct() . " ~ {$this->totalHours} Hours.";
		return $str;
	}
}

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (Rp. {$product->price})";
// 		return $str;
// 	}
// }

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";
$product2->setDiscount(50); 
echo $product2->getPrice();
echo "<hr>";
echo $product1->title;//2. this will output error as title is private (can be used class Product), while product1 is class Comic (child class)