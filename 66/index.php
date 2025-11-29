<?php

//3rd we make the info product interface below
interface InfoProduct {
	public function getInfoProduct();
}
//6th we will implement the InfoProduct above in each of the child class

//4th the product class below cannot be an abstract class any longer, as an abstract class must have at least an abstract method. But, the abstract method in this class we already changed it into an interface at 3rd 

// abstract class Product {

//5th the prouct class below returned to normal class and we can instantiate it
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

	//1st we change the abstract method below to be an interface. When the child classes want to use the getInfoProduct, they just implement the interface 

	//abstract public function getInfoProduct(); //2nd, we cut this part
	
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

//7th we just add the implements InfoProduct below  
//the game class below inherits all the methods and property of product class. It also implements info product interface
class Game extends Product implements InfoProduct {
	public $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $totalHours = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalHours = $totalHours;
	}

	// public function setDiscount($discount){
	// 	$this->discount = $discount;
	// }


	//make the method below to implement the InfoProduct interface 
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