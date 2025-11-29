<?php

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $discount = 0;//1. we add discount. We set this to public to see its weakness. 
				 //2. To give discount we must have a method to set discount at below  
				 
	private $price;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	//2. method to set discount
	public function setDiscount($discount){
		$this->discount = $discount;
	}

	//3. new price after discounts
	public function getPrice(){
		return $this->price - ($this->price * $this->discount / 100);
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

	public function getInfoProduct() {
		$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
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
		$str = "Game :  " . parent::getInfoProduct() . " ~ {$this->totalHours} Hours.";
		return $str;
	}
}

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (Rp. {$product->price})";
// 		return $str;
// 	}
// }

// $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100);
// $product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 50);

//in rupiah:
$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";

//$product2->setDiscount(0); //4. we print the new price after discount
$product2->discount = 90;//5. because the method property is public we can do like this code. Don't let something can access it directly. We must prevent this by setting the visibility of $discount = 0 above to either private or protected depends we want to use it in child class or not.
//if to be used in child, set to protected. Go to 39.
echo $product2->getPrice();