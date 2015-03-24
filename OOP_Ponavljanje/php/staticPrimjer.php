<?php 

//definicija klase
class Student {
//podatkovni clanovi
	protected $ime;
	private $matBr;

//staticki clan klase
	public static $num;

//konstruktor
	public function __construct($ime, $matBr) {
		Student::$num++;
		$this->ime = $ime;
		$this->matBr = $matBr;
		echo "Trenutni broj studenata: " . Student::$num . "<br/>";
	}

	public static function dohvatiNesto(Student $obj) {
		$obj->getMatBr();
	}

//javna metoda
	public function getMatBr() {
		return $this->matBr;
	}

//destruktor klase
	public function __destruct() {
		echo $this->ime . " I am destroyed!" . "<br />";
	}
}

$pero = new Student("Petar", 1234);
$ivana = new Student("Ivana", 123123);

// $mate = new Student("Mate", 112233);

// $mate = $pero;
// echo $mate->getMatBr() . "<br />";