<?php

//Product Sales: Comic and Game

class Product {
	public $title = "title", 
				 $author = "author",
				 $publisher = "publisher",
				 $price = 0;

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

//we make new product (game)
$product4 = new Product();
$product4->title = "Unchartered";
$product4->author = "Neil Druckmann";
$product4->publisher = "Sony Computer";
$product4->price = 75;

echo "Comic : " . $product3->getLabel();
echo "<hr>";
echo "Game : " . $product4->getLabel();

//if there are 10 products, it will be inconvenient to type repetitively the code above. There's a much more convenient way in the next lesson: Constructor Method