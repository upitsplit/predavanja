<?php 

//donja klasa je cisto za primjer, NE RADI!!

class Database {
	private $mysqli;

	public function __construct() {
		$this->mysqli = mysqli_connect(...); //spajamo se na bazu
		if(!$this->mysqli) 
			//nije se uspilo spojit...
			die("Error je izbacen!"); //izbacili smo error
	}

	//dodatne funkcije za dohvacanje pojedinih podataka
	public function dohvatiSveKorisnike() {
		$sql = "SELECT * FROM tablica";
		return $mysqli_query($this->mysqli, $sql);
	}


	//...
	//...
	//...


	public function __destruct() {
		$this->mysqli = null; //prekidamo vezu
	}

}