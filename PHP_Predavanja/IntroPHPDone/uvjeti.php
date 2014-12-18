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
	$a = 25;
	$b = 15;
	echo "a = $a <br />";
	echo "b = $b <br />";

	if ( $a < $b )
		echo "<p>Varijabla a je manja od varijable b</p>";
	else
		echo "<p>Varijabla a nije manja od varijable b</p>";

//imamo trostruko jednako === koje provjerava vrijednost i tip varijabli
	$stringBroj = "25";
	if($a == $stringBroj) {
		echo "<p>Varijabla a ima istu vrijednost kao stringBroj</p>";
		echo "<p>Ovo je ista vrijednost! Provjerena sa == </p>";
	}

	if($a === $stringBroj) {
		echo "<p>Varijabla a ima istu vrijednost kao stringBroj i istog su tipa</p>";
		echo "<p>Ovo je ista vrijednost! Provjerena sa === </p>";
	}

//cisto za provjeru smo promijenili vrijednost varijable $stringBroj
	$stringBroj = 25;
	if($a === $stringBroj) {
		echo "<p>Varijabla a ima istu vrijednost kao stringBroj i istog su tipa '<i>(promijenili smo vrijednost varijable stringBroj)'</i></p>";
		echo "<p>Ovo je ista vrijednost! Provjerena sa === </p>";
	}
?>
</body>
</html>