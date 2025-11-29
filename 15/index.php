<?php

//Product Sales: Comic and Game

class Product {
	public $title = "title", 
				 $author = "author",
				 $publisher = "publisher",
				 $price = 0;

	//we replace the function in 14 with new one:
	//'this' keyword will fetch the value from the variable above
	//without 'this', it makes new variable in the function
	public function getLabel() {
		return "$this->author, $this->publisher";
	}

}

$product3 = new Product();
$product3->title = "Naruto";
$product3->author = "Masashi Kishimoto";
$product3->publisher = "Shonen Jump";
$product3->price = 90;

echo "Comic : $product3->author, $product3->publisher";
echo "<br>";
echo $product3->getLabel();//this will output the reassign values

