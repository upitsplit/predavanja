<?php 
//funkcija sa defaultnim vrijednostima 
	function prvaFunkcija( $a = 1, $b = 1 ) {
		echo "Suma je: ";
		return $a+$b;
	}

//funkcija koja mora primiti niz!
	function arrCalculator ( array $niz ) {
		return "Duljina niza je: ".count($niz);
	}

	function rekurzivnaFunkcija( $suma, $i ) {
		if($i==0)
			return $suma;

		$suma += rekurzivnaFunkcija($suma, $i-1) + $i;

		return $suma; 
	}

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Superglobalne varijable</title>
	<style type="text/css">
		* { font-size: 115%; }
	</style>
</head>
<body>

<?php 
	echo prvaFunkcija(2, 5) . "<br />"; 
	echo prvaFunkcija(2) . "<br />"; 
	echo arrCalculator(array(2, 3 ,4 ,5 ,6 ,7));
	echo "<br />Rekurzija: ".rekurzivnaFunkcija(0, 4);
	//znak @ bi trebao "prikriti" error,
	@var_dump(arrCalculator(4));
?>
</body>
</html>