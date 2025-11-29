<?php

class Product {

	private $title, 
				  $author,
				  $publisher,
					$price,
					$discount;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function getTitle(){
		return $this->title;
	}

	public function setAuthor($author){
		$this->author = $author;
	}

	public function getAuthor(){
		return $this->author;
	}

	public function setPublisher($publisher){
		$this->author = $publisher;
	}

	public function getPublisher(){
		return $this->publisher;
	}

	public function setDiscount($discount){
		$this->discount = $discount;
	}

	public function getDiscount(){
		return $this->discount;
	}


	public function setPrice($price){
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

	public function getInfoProduct()
	{
		$str = "Game :  " . parent::getInfoProduct() . " ~ {$this->totalHours} Hours.";
		return $str;
	}
}

class PrintProductInfo {
	public function print(Product $product){
		$str = "{$product->title} | {$product->getLabel()}  (Rp. {$product->price})";
		return $str;
	}
}

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";

$product2->setDiscount(50); 
echo $product2->getPrice();
echo "<hr>";

$product1->setAuthor("Adrian Nandu");//we change the author
echo $product1->getAuthor();
