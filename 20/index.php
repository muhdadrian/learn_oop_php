<?php
//Object Type

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

//we make a new class to print all product info whether comic or game
class PrintProductInfo {
	//this class only has a method
	//the function parameter will capture the value from the object that we instantiate at the bottom
	public function print($product){
		//this function will return string value
		//for author we can write $product->author, but we already have getLabel above to display author and publisher 
		$str = "{$product->title} | {$product->getLabel()}  (RM. {$product->price})";
	}
}

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90);

$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75);


echo "Comic : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();

//how to run the print function above? go to 21.