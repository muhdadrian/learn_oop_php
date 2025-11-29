<?php

//we apply inheritance here..

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

	public function getCompleteInfo() {
		$str = "{$this->type} : {$this->title} | {$this->getLabel()} (RM{$this->price})";
		if($this->type == "Comic") {
			$str .= " - {$this->totalPages} Pages.";
		} else if($this->type == "Game"){
			$str .= " ~ {$this->totalHours} Hours.";
		}
		return $str;
	}
}

//we make child class. This means we can inherit or use all of its parent's property and method
class Comic extends Product {

}

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
// 		return $str;
// 	}
// }

//we test the new empty child class above by instantiating by replacing the Product to Comic word. The result is similar. This prove that the child class can use anything what its parent's has.
//for further explanation go to 27.
$product1 = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0, "Comic");

$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50, "Game");

echo $product1->getCompleteInfo();
echo "<br>";
echo $product2->getCompleteInfo();