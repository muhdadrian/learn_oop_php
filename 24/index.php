<?php

class Product {
	public $title, 
				 $author,
				 $publisher,
				 $price,
				 $totalPages,
				 $totalHours,
				 $type;//6

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = "price", $totalPages = 0, $totalHours = 0, $type)//6
	{
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
		$this->totalPages = $totalPages;
		$this->totalHours = $totalHours;
		$this->type = $type;//6
		//the type in $this->type refer to $type var above, while = $type refer to the parameter in this function
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

	//7. we make a new method
	public function getCompleteInfo() {
		//Comic : Naruto | Mashashi Kishimoto, Shonen Jump (RM90) - 100 pages. (this serves as guide to write the code below)
		$str = "{$this->type} : {$this->title} | {$this->getLabel()} (RM{$this->price})";
		if($this->type == "Comic") {
			$str .= " - {$this->totalPages} Pages.";
		} else if($this->type == "Game"){
			$str .= " ~ {$this->totalHours} Hours.";
		}
		return $str;
	}
}

// class PrintProductInfo {
// 	public function print(Product $product){
// 		$str = "{$product->title} | {$product->getLabel()}  (RM {$product->price})";
// 		return $str;
// 	}
// }

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90, 100, 0, "Comic");//5

$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75, 0, 50, "Game");//5

echo $product1->getCompleteInfo();
echo "<br>";
echo $product2->getCompleteInfo();

//we are going to display(all are same except the pages and hours below):
//Comic : Naruto | Mashashi Kishimoto, Shonen Jump (RM90) - 100 pages.
//Game : Unchartered | Neil Druckmann, Sony Computer (RM75) - 50 hours.

//what we should do?
//1. make another variable or property
//2. we need to give value to the new property
//3. make another local variable in function __construct
//4. we need to set the property in the construct 
//5. when we instantiate, the product class in product1 does not know if Naruto is a comic or game. So we need to add "Comic" and "Game" in each object. Each time we instantiate, the object will know itself whether it's a comic or game.
//6. we create another var to capture the value 
//7. we make a method 

//we only have two types of product here, comic (pages) and game(hours). 