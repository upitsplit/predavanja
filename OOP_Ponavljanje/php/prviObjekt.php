<?php 

//definicija klase Student
class Student {
//podatkovni clanovi
	public $ime;
	private $matBr;

//konstruktor
	public function __construct($ime, $matBr) {
		$this->ime = $ime;
		$this->matBr = $matBr;
	}

	public function __get($name) {
		echo $name;
	}

//javna metoda
	public function getMatBr() {
		return $this->matBr;
	}

	public function __destruct() {}
}

$pero = new Student("Petar", 25);
// $pero = "String bla bla";
// echo $pero->getMatBr();

echo $pero->matBr;
$ivana = new Student("Ivana", 123123);
// $mate = new Student("Mate", 112233);

// echo $pero->getMatBr();

