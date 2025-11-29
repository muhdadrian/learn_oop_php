<?php
//constructor

class Product {
	public $title = "title", 
				 $author = "author",
				 $publisher = "publisher",
				 $price = 0;

//we make constructor
	public function __construct(){
		echo "Hello World!";
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

}

//comic
$product3 = new Product();
$product3->title = "Naruto";
$product3->author = "Masashi Kishimoto";
$product3->publisher = "Shonen Jump";
$product3->price = 90;

//game
$product4 = new Product();
$product4->title = "Unchartered";
$product4->author = "Neil Druckmann";
$product4->publisher = "Sony Computer";
$product4->price = 75;

echo "Comic : " . $product3->getLabel();
echo "<hr>";
echo "Game : " . $product4->getLabel();

//why it's twice?: Hello World!Hello World! - we make two objects or we instantiate two objects
//the constructor function above will be automatically executed without we call it.