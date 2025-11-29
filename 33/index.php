<?php

/*
- Visibility here (Access Modifier) is a concept that is used to organize access from property and method on an object.
- There are three visibility keyword: public, protected and private. 
*/

/*
1. public - can be used anywhere including outside class.
2. protected - can only be used in a class and its descendant.
3. private - can only be used in a specific class.
*/

/*
Why we have to apply visibility?
1. to display some items in a class that is needed by client. 
2. to determine the clear need for an object. 
3. we can give control to our code to avoid 'bug'.
*/

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

	public function getInfoProduct() {
		$str = "{$this->title} | {$this->getLabel()} (RM{$this->price})";
		return $str;
	}
}

class Comic extends Product {
	public $totalPages;
  public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, 
	$totalPages = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalPages = $totalPages;
		
	}

	public function getInfoProduct(){ 
		$str = "Comic : " . parent::getInfoProduct() . " - {$this->totalPages} Pages.";
		return $str;
	}
}

class Game extends Product {
	public $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price", 
	$totalHours = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalHours = $totalHours;
	}

	public function getInfoProduct()
	{
		$str = "Game :  " . parent::getInfoProduct() . " - {$this->totalHours} Hours.";
		return $str;
	}
}

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
// 		return $str;
// 	}
// }

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";
$product2->price = 1.50;//2. we can change the price. This is dangerous. We should not let something outside of our class can modify the property value. How to resolve this? We just change the visibility from public to either protected or private. Go to 34
echo $product2->price;//1. we can access property of class Product with public visibility, we can access from outside class. This will cause problem, as we can change the price according to our mind where the price should be done when we are constructing the object. 