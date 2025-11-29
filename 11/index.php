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
$product2->title = "Unchartered";
//we add property that is not existed yet:
$product2->addProperty = "hahaha";
var_dump($product2);//this will also output the new property of addProperty

//be careful in reassigning a property, if it's wrong in spelling it will not output error, but a new property will be added. Therefore, visibility is important so that we will not simply add and change the available property.
