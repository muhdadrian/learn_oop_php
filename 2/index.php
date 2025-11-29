<?php
//Class and Object
//Class is a template or bluprint to make an object
//An Object is a house 
//It's like a house design to make a house or housing area from a single map

//From Sandhika:
//Class - Blueprint / Template untuk membuat instance dari object
//Class mendefinisikan Object
//Class bisa menyimpan data dan perilaku yang disebut dengan property dan method

//Membuat Class:
//Diawali dengan menuliskan keyword class, diikuti nama dan dibatasi dengan {} untuk menyimpan property dan method
//Aturan penamaan class sama seperti variable

class Coba {
	public $a; //property

	//method
	public function b(){

	}
}

//Object:
//Instance yang didefiniskan oleh Class.
//Bentuk nyatanya ialah Object bukan Class kerana Class hanya template
//Kita bisa buat banyak Object hanya dengan menggunakan satu Class
//Object dibuat dengan menggunakan keyword new

class Test {
//Class ini kosong tapi valid
}

// membuat Object instance dari Class

$a = new Test();
$a = new Test();
?>