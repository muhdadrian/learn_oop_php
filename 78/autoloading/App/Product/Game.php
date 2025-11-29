<?php

class Game extends Product implements InfoProduct {
	public $totalHours;

	public function __construct($title = "title", $author = "author", $publisher = "publisher", $price = 0, $totalHours = 0)
	{
		parent::__construct($title, $author, $publisher, $price);
		$this->totalHours = $totalHours;
	}

	public function getInfo() {
		$str = "{$this->title} | {$this->getLabel()} (Rp. {$this->price})";
		return $str;
	}

	public function getInfoProduct()
	{
		$str = "Game :  " . $this->getInfo() . " ~ {$this->totalHours} Hours.";
		return $str;
	}
}
