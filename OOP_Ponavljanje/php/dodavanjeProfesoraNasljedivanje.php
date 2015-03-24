<?php 

class Osoba {
	public $ime;

	public function __construct($ime) {
		$this->ime = $ime;
		echo "Base class constructor called!";
	}
}

class Student extends Osoba {
	private $matBr;

	public function __construct($ime, $matBr) {
		$this->ime = $ime;
		$this->matBr = $matBr;
		echo "Created student! <br>".$this->ime."<br>".$this->matBr."<br>";
	}
}

class Profesor extends Osoba {
	public $kolegiji = array();

	public function __construct($ime,array $kolegiji) {
		$this->ime = $ime;
		$this->kolegiji = $kolegiji;
	}

	public function ispisKolegija() {
		foreach ($this->kolegiji as $kolegij)
			echo "<br>".$kolegij;
			
	}
}

$pero = new Student("Petar", 1234);
// echo "<br>";
// $ivana = new Student("Ivana", 3431);
// echo "<br>";
// var_dump($pero);

// echo "<br>";
// $profa = new Profesor("Miljenko", array('PIN', 'DIMT', 'RIP'));
// echo "<br>";
// var_dump($profa);
// echo "<br>";
// $profa->ispisKolegija();