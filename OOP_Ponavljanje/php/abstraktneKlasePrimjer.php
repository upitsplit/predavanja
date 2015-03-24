<?php 

abstract class Osoba {
	public $ime;

	public abstract function chickenDance();

	public function ispisPodataka() {
		echo "Moje ime je " . $this->ime;
	}
}

class Student extends Osoba {

	public function __construct($ime) {
		$this->ime = $ime;
	}

	public function chickenDance() {
		echo "I can do the chicken dance!";
	}
}

$pero = new Student("Pero");
$pero->chickenDance();