<?php 

class Student {
	public $ime;
	private $matBr;

//ovako mozemo doci do matBr
	public function __set($name, $value) {
		$this->$name = $value;
	}

	public function __construct($ime) {
		$this->ime = $ime;
		echo "Created object <br>";
	}
}

echo "<pre>";
$pero = new Student("Petar");
var_dump($pero);
$pero->matBr = 2341;
var_dump($pero);
echo "</pre>";