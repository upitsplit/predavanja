<?php 

class Profesor {
	public $ime;
	public $kolegiji = array();

	public function __construct($ime, array $kolegiji) {
		$this->ime = $ime;
		$this->kolegiji = $kolegiji;
		echo "Napravljen profa!";
	}

	public function ispisiKolegije() {
		foreach ($this->kolegiji as $kolegij)
			echo $kolegij . "<br/>";
	}

}

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

//javna metoda
	public function getMatBr() {
		return $this->matBr;
	}
}

// $pero = new Student("Petar", 25);
// $ivana = new Student("Ivana", 123123);
// $mate = new Student("Mate", 112233);


// $profa = new Profesor("Miljenko", array('PIN', 'DIMT', 'RIP'));
// $profa->ispisiKolegije();