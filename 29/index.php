<?php

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price,
				 $totalPages,
				 $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price", $totalPages = 0, $totalHours = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPages = $totalPages;
		$this->totalHours = $totalHours;
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

	public function getInfoProduct() {
		$str = "{$this->title} | {$this->getLabel()} (RM{$this->price})";//1. this is similar to what we have in class Comic
		return $str;
	}
}

class Comic extends Product {
	public function getInfoProduct(){
		// $str = "Comic : {$this->title} | {$this->getLabel()} (RM{$this->price}) - {$this->totalPages} Pages."; //2. we replace this with below  
		$str = "Comic : {$this->getInfoProduct()} - {$this->totalPages} Pages.";//3. we cannot write like this, as it means that we are calling this own function. It will 'spinning' by itself - we call it by recursive. For solution go to 30 
		return $str;
	}
}

class Game extends Product {
	public function getInfoProduct()
	{
		$str = "Game : {$this->title} | {$this->getLabel()} (RM{$this->price}) - {$this->totalHours} Hours.";
		return $str;
	}
}

class PrintProductInfo {
	public function print(Product $product){
		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
		return $str;
	}
}

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
