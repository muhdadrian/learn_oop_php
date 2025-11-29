<?php

//Product Sales: Comic and Game

class Product {
	// public $title;
	// public $author;
	//to save time just add comma for the code above. No need to write public for each variable:
	public $title, 
				 $author,
				 $publisher,
				 $price;

}

//product1 below is an object, which is an instant from Product class
$product1 = new Product();
var_dump($product1);//this will output NULL as we are yet define the value. 
//How to define the value? There are several ways:
//1. we can define by default for example: public $title = "title",
//when we do the instant ($product1 = new Product();), automatically there's already a value. Go to 7.
//2. we can reassign the $title with new value by using '->'. Go to 8
