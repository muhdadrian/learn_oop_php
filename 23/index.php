<?php
//Inheritance:
//1. to create hierarchy between Parent class and Child class.
//2. Child Class will inherit all properties and methods from its Parent (visible).
//3. Child Class will extend the functionality from its parent.

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price,
				 $totalPages,//1
				 $totalHours;//1

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price", $totalPages = 0, $totalHours = 0)//3
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPages = $totalPages;//4
		$this->totalHours = $totalHours;//4
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}
}

class PrintProductInfo {
	public function print(Product $product){
		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
		return $str;
	}
}

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0);//2 (100 will be sent to construct above, so we need to make another variable in the function)
//we can either write 0 or null for the $totalHours in construct

$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50);//2
//the 0 is for the $totalPages in construct

//we are going to display(all are same except the pages and hours below):
//Comic : Naruto | Mashashi Kishimoto, Shonen Jump (RM90) - 100 pages.
//Game : Unchartered | Neil Druckmann, Sony Computer (RM75) - 50 hours.

//what we should do?
//1. make another variable or property
//2. we need to give value to the new property
//3. make another local variable in function __construct
//4. we need to set the property in the construct 
//5. when we instantiate, the product class in product1 does not know if Naruto is a comic or game. So we need to add "Comic" and "Game" in each object. go to 24 