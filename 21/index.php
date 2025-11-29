<?php

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price ;

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

class PrintProductInfo {
	public function print($product){
		$str = "{$product->title} | {$product->getLabel()}  (RM. {$product->price})";
		return $str;
	}
}

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90);

$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75);


echo "Comic : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();
echo "<br>";
//we want to print the complete details of product1
//we make a new variable
$infoProduct1 = new PrintProductInfo(); //we instantiate the class PrintProductInfo (new class), but we are yet sure which product to print.
echo $infoProduct1->print($product1); //we call the method of function print inside the class PrintProductInfo

//for betterment go to 22