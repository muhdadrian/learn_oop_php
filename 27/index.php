<?php

//this is for explanation only

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price,
				 $totalPages,
				 $totalHours,
				 $type;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price", $totalPages = 0, $totalHours = 0, $type)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPages = $totalPages;
		$this->totalHours = $totalHours;
		$this->type = $type;
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

	public function getInfoProduct() {
		$str = "{$this->type} : {$this->title} | {$this->getLabel()} (RM{$this->price})";
		if($this->type == "Comic") {
			$str .= " - {$this->totalPages} Pages.";
		} else if($this->type == "Game"){
			$str .= " ~ {$this->totalHours} Hours.";
		}
		return $str;
	}
}

class Comic extends Product {

}

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
// 		return $str;
// 	}
// }

$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0, "Comic");//this will enter into constructor. Is there any constructor in class Comic above? One of inheritance behaviours, if we call a method for child class, it will find first the method in the class, if there's no, then it will look in the parent class. 
//in details: we are executing constructor for class Comic (by instantiating this object), 1st it will look constructor inside class Comic. If none, then it will look in class Product. Then, it will find it there and found. So, it will execute the constructor of class Product.   

$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50, "Game");	

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();