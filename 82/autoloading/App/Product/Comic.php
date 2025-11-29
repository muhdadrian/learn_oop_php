<?php

class Comic extends Product implements InfoProduct {
	public $totalPages;

  public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, 
	$totalPages = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalPages = $totalPages;		
	}

	public function getInfo() {
		$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $str;
	}

	public function getInfoProduct(){ 

		$str = "Comic : " . $this->getInfo() . " - {$this->totalPages} Pages.";
		return $str;
	}
}
