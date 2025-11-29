<?php

//Product Sales: Comic and Game

class Product {
	public $title = "title", 
				 $author = "author",
				 $publisher = "publisher",
				 $price = 0;

}

$product1 = new Product();
$product1->title = "Naruto";
var_dump($product1);

$product2 = new Product();
//we reassign the title below:
$product2->title = "Unchartered";
var_dump($product2->title); 

//we can add new property after the object is instantiated. Go to 11.
