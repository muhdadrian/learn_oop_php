<?php

//the problem right now is we can instantiate in class Product 

interface InfoProduct {
	public function getInfoProduct();
}

class Product {

	private $title, 
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

	public function setPrice($price){
		$this->price = $price;
	}

	public function getPrice(){
		return $this->price - ($this->price * $this->discount / 100);
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}
	
	public function getInfo() {
		$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $str;
	}
}

class Comic extends Product implements InfoProduct {
	public $totalPages;

  public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, 
	$totalPages = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalPages = $totalPages;		
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

// $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

// $printProduct = new PrintProductInfo();
// $printProduct->addProduct($product1);
// $printProduct->addProduct($product2);
// echo $printProduct->print();

$test = new Product();//this does not output error, it means that it can be instantiated. What we actually want is the class Product cannot be instantiated, as we yet know what the product is either comic or game 
//to disable the class Product instance is by making the class Product as an abstract in 68