<?php

interface InfoProduct {
	public function getInfoProduct();
}

abstract class Product {

	//5th we change the keyword private to protected as private can only be used within the class. If it can be used in the class and in its child class, changed it to protected.
	// private $title, 
	protected $title, 
				  $author,
				  $publisher,
					$price,
					$discount = 0;

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

	public function setDiscount($discount) {
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


	abstract public function getInfo(); //1st we make this only a declaration method
	
	//2nd, we cut the method below and moved to each of its child class (3rd & 4th)
	// public function getInfo() {
	// 	$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
	// 	return $str;
	// }
}

class Comic extends Product implements InfoProduct {
	public $totalPages;

  public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, 
	$totalPages = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalPages = $totalPages;		
	}

	//3rd we moved the code from the parent to here
	public function getInfo() {
		$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $str;
	}

	public function getInfoProduct(){ 

		$str = "Comic : " . $this->getInfo() . " - {$this->totalPages} Pages.";
		return $str;
	}
}

class Game extends Product implements InfoProduct {
	public $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $totalHours = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalHours = $totalHours;
	}

	//4th
	public function getInfo() {
		$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $str;
	}

	public function getInfoProduct()
	{
		$str = "Game :  " . $this->getInfo() . " ~ {$this->totalHours} Hours.";
		return $str;
	}
}

class PrintProductInfo {
	public $registerProduct = array(); 
	
	public function addProduct(Product $product){
		$this->registerProduct[] = $product;
	}

	public function print(){
		$str = "REGISTER PRODUCT : <br>";

		foreach($this->registerProduct as $p){
			$str .= "- {$p->getInfoProduct()} <br>";
		}

		return $str;
	}
}

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

$printProduct = new PrintProductInfo();
$printProduct->addProduct($product1);
$printProduct->addProduct($product2);
echo $printProduct->print();
