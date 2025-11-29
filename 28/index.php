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

	//this function will be not used if we instantiate the class Comic below
	public function getInfoProduct() {
		$str = "{$this->title} | {$this->getLabel()} (RM{$this->price})";
		return $str;
	}
}

class Comic extends Product {
	//this will call the getInfoProduct for comic
	public function getInfoProduct(){
		//we need not the type below as we know it's a comic
		$str = "Comic : {$this->title} | {$this->getLabel()} (RM{$this->price}) - {$this->totalPages} Pages.";
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

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
// 		return $str;
// 	}
// }

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0);//this will check getInfoProduct in class Comic. Yes, there's getInfoProduct and it will use it. If we delete it in class Comic, it will look at class Product.

$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50);//we need to erase the parameter of comic and game in both product1 and product2. Likewise, the variable $type in class Product also need to be deleted.

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();

//we might ask why we need to create two new class. It seems more effective before we apply the inheritance. This will look more sense and easier when the functionality of child classes are getting more.