<?php

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price ;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price"){
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}
}

class PrintProductInfo {
	//we expect the parameter $product below is only capturing the object $product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90); below, but it will capture anything in $product1 (echo $infoProduct1->print($product1);) at underneath. It could be str, int and other object besides product. So to make the function print only captured specific class Product, we add its type - Product
	//the function print only receive the parameter of product class type (Product) and its object ($product) 
	//the result will be the same, but when we enter randomly for example in echo $infoProduct1->print($product1); to echo $infoProduct1->print("asd");, it will output error
	//this is an example, we can make object as its own data type
	public function print(Product $product){
		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
		return $str;
	}
}

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90);

$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75);


echo "Comic : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();
echo "<br>";
$infoProduct1 = new PrintProductInfo(); 
echo $infoProduct1->print($product1); 