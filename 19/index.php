<?php
//constructor

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price ;

	//you can either give default value or not. 
	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price"){
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

}

//comic
$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90);


//game
$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75);

$product3 = new Product("Dragon Ball");

echo "Comic : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();
echo "<br>";
var_dump($product3);
echo "<br>";
// echo "Game : " . $product3->getLabel();

//we'll use the constructor when we want to make connection with database