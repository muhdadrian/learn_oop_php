<?php

//Abstract Class (Part 2)

//product is the main class to define the basis component of a product. Actually, the product that we will use is comic and game classes
//if we never instantiate this product class, then we can make it an abstract class. This is a decision based on design, and not due to true or false in making abstract class
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

	//this method will be used by its child classes. This is that we are going to modify to be abstract method 
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

	// public function setDiscount($discount){
	// 	$this->discount = $discount;
	// }

	public function getInfoProduct()
	{
		$str = "Game :  " . parent::getInfoProduct() . " ~ {$this->totalHours} Hours.";
		return $str;
	}
}

class PrintProductInfo {
	public $registerProduct = array(); //can put [], the new array
	//2nd, the 1st will be filled in this array likewise the product2

	//to add new product in $registerProduct (array):
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

$printProduct = new PrintProductInfo();//we instantiate 
$printProduct->addProduct($product1);//1st: printProduct please execute the addProduct function that is filled with product1
$printProduct->addProduct($product2);
echo $printProduct->print();//this will print product1 and product2 simultaneously

/*
$this->registerProduct[] = $product;

$this: Refers to the current instance of the PrintProductInfo class.
$this->registerProduct: Accesses the registerProduct property (the array that holds the products).
[]: The empty brackets mean that you are adding a new element to the end of the array.
= $product: The product passed into the method is added as a new element at the end of the registerProduct array.
*/