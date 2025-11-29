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