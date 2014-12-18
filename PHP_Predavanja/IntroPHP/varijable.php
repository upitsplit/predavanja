<?php 
	//Boolean
	$nekiBoolean = true;
	
	//Integer
	$binarniBroj = 0b11;
	$oktalniBroj = 05;
	$dekadskiBroj = 5;
	$hexBroj = 0x5;
	$noviString = "Ovo je novi string $hexBroj";

	echo "Binarni broj " . $binarniBroj . "<br />";
	echo "Oktalni broj " . $oktalniBroj . "<br />";
	echo "Dekadski broj " . $dekadskiBroj . "<br />";
	echo "Heksadecimalni broj " . $hexBroj . "<br />";
	echo "Bla bla  " . $noviString . "<br />";

	/*
	//Drugi nacin ispisa ako koristimo "" navodnike

	echo "Binarni broj $binarniBroj<br />";
	echo "Oktalni broj $oktalniBroj<br />";
	echo "Dekadski broj $dekadskiBroj<br />";
	echo "Heksadecimalni broj $hexBroj<br />";
	
	*/
	//Ako koristimo '' navodnike za ispis ne mozemo pisati ovako
	//echo 'Binarni broj $binarniBroj'; //KRIVO

?>