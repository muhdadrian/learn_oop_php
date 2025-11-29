<?php

//before 60

class Product {
	private $title,
				 	$author,
				 	$publisher,
				 	$discount = 0,
				 	$price;
					 
	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0){
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
		$this->publisher = $publisher;
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

	public function getLabel(){
		return "$this->author, $this->publisher";
	}

	public function getInfoDetails(){
		$str = "{$this->title} | {$this->getLabel()} (RM{$this->price})";
		return $str;
	}
}

class Comic extends Product {
	public $totalPages;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $totalPages = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalPages = $totalPages;
	}

	public function getInfoDetails()
	{
		$str = "Comic : " . parent::getInfoDetails() . " - {$this->totalPages} Pages.";
		return $str;
	}
}

class Game extends Product {
	public $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $totalHours = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalHours = $totalHours;
	}

	public function getInfoDetails()
	{
		$str = "Game : " . parent::getInfoDetails() . " - {$this->totalHours} Hours.";
		return $str;
	}
}

// Game : Unchartered | Neil Druckmann, Sony Computer (RM75) - 50 Hours.

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $product1->getInfoDetails();
echo '<br>';
echo $product2->getInfoDetails();
echo '<hr>';


$product2->setDiscount(50);
echo $product2->getPrice();
echo '<hr>';

$product1->setAuthor("Adrian Nandu");
echo $product1->getAuthor();