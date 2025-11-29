<?php

//Product Sales: Comic and Game

class Product {
	public $title = "title", 
				 $author = "author",
				 $publisher = "publisher",
				 $price = 0;

//we make method
	public function sayHello() {
		return "Hello World!";
	}

}

$product3 = new Product();
$product3->title = "Naruto";
$product3->author = "Masashi Kishimoto";
$product3->publisher = "Shonen Jump";
$product3->price = 90;

echo "Comic : $product3->author, $product3->publisher";//to display this in method instead of manual go to 15
echo "<br>";
echo $product3->sayHello();

