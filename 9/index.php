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

//we add another product
$product2 = new Product();
var_dump($product2->title); 

//in product2 its title is string title, while product1 its string Naruto. 
//product2, its title is default value 
//how to make product2's title different? Just reassign it at 10.