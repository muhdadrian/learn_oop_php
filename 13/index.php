<?php

//Product Sales: Comic and Game

class Product {
	public $title = "title", 
				 $author = "author",
				 $publisher = "publisher",
				 $price = 0;

}

$product3 = new Product();
$product3->title = "Naruto";
$product3->author = "Masashi Kishimoto";
$product3->publisher = "Shonen Jump";
$product3->price = 90;

//to make label
echo "Comic : $product3->author, $product3->publisher";


