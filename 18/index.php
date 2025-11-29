<?php
//constructor

class Product {
	public $title = "title", 
				 $author = "author",
				 $publisher = "publisher",
				 $price = 0;

//because the constructor below is a function or method, therefore the parameters inside it are different with the above. Below are local variables, while the above are properties for class
//the value sent from the object below will be captured by the $title below and will be used to fill the $title above, which is a class property
	public function __construct($title, $author, $publisher, $price){
		//we reassign the value in $title above
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->price = $price;
	}

	public function getLabel() {
		return "$this->author, $this->publisher";
	}

}

//comic
$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 90);


//game
$product2 = new Product("Unchartered", "Neil Druckmann", "Sony Computer", 75);

echo "Comic : " . $product1->getLabel();
echo "<hr>";
echo "Game : " . $product2->getLabel();

//to give default value go to 19