<?php

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price;
				//  $totalPages,//2. we delete this 
				// $totalHours;//2. delete

	//we also delete the $totalPages and $totalHours below
	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0 
	// $totalPages = 0, 
	//$totalHours = 0
	)
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		// $this->totalPages = $totalPages;
		//$this->totalHours = $totalHours;
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
	public $totalPages;//1. we create variable here and we delete the var at above

	//3. we build construct to fill the var public $totalPages above
	//to fill the construct below is the same with the construct in parent 
	//in the parameter we'll capture the values when we instantiate the object at the bottom
  public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, 
	$totalPages = 0)//5. we copy the parameter from the parent
	{
		//6. we execute the parent's construct
		parent::__construct($title, $author, $publisher, $price);

		//7. we fill the total pages manually
		//this->totalPages below refer to refer to public $totalPages; above under the 'class Comic extends Product {' 
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

// $product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0);//4.replace this with:
$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100);
// $product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50);//4. replace this with:
$product2 = new Game("Unchartered", "Neil Druckmann", "Sony Computer", 75, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
