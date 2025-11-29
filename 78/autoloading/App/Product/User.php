<?php namespace App\Product;

//we add namespace keyword above to indicate the class owned by Product folder. The separator is backslash 
//App called vendor (who built it)
//The class User below is owned by namespace App\Product.
//Do the same for Service
//the namespace keyword must be written in each class you make

class User {
	public function __construct()
	{
		echo "This is class " . __CLASS__;
	}
}