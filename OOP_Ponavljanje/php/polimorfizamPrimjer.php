<?php 

interface PrviInt {
	public function ispisPodataka();
}


class Djikan implements PrviInt {
	private $ime;
	public function __construct($ime) {
		$this->ime = $ime;
	}


	public function ispisPodataka() {
		echo "<br>Moje ime je " . $this->ime;
	}
}

class Student implements PrviInt {
	private $ime;
	public function __construct($ime) {
		$this->ime = $ime;
	}

	public function ispisPodataka() {
		echo "<br>Moje ime je " . $this->ime;
	}
}

// $maliZeus = new Djikan("Ziki");
// $pero = new Student("Petar");

// $mojArr = array();
// array_push($mojArr, $maliZeus);
// array_push($mojArr, $pero);

// function ispisiSvePodatke(PrviInt $element) {
// 	$element->ispisPodataka();
// }

// foreach($mojArr as $element) 
// 	ispisiSvePodatke($element);
