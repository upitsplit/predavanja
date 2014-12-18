<!doctype html>
<html>
<head>
	<title>Varijable</title>
</head>
<body>
<?php 

//Dodijeljivanje 'Marija'

$ime1 = 'Marija';
$ime2 = 'Ante';
echo "<br />";
echo "Ime1: " . $ime1 . " Ime2: " . $ime2;

//pridruzivanje vrijednosti jedne varijable drugoj
$prezime1 = 'Vrdoljak';
$prezime2 = $prezime1;
echo "<br />";
echo "Prezime1: " . $prezime1 . " Prezime2: " . $prezime2;

$prezime2 = 'Jerko';
echo "<br />";
echo "Prezime1: " . $prezime1 . " Prezime2: " . $prezime2;
?>
</body>
</html>