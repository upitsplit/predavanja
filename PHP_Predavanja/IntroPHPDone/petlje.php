<!doctype html>
<html>
	<head>
		<title>Petlje</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Petlje</h1>
<?php 
	$niz = array(26, 'Mate', 1.2, 28, 30);
	
	$nizDva = array(
		'ID' => 26,
		'ime' => 'Mate',
		'prosjek' => 1.2,
		'dob' => 28,
		'ECTS' => 30,
	);

//array merge koristimo za spajanje nizova
	$nizTri = array($niz, $nizDva, array(2, 5, 1, "Trololo"), array_merge($niz, $nizDva));

	//for petlja
	echo "<p>For petlja</p>";
	for($i = 0; $i < count($niz); $i++)
		echo ($i+1) . " element: " . $niz[$i] . "<br />";

	//while petlja
	echo "<p>While petlja</p>";
	$i = 0;
	while($i < count($niz)) {
		echo ($i+1) . " element: " . $niz[$i] . "<br />";
		$i++;
	}

	//foreach petlja
	echo "<p>Foreach petlja</p>";
	foreach($nizDva as $k=>$v) {
		echo "Kljuc [".$k."] , vrijednost = " . $v . "<br/>";
	}

	// foreach($nizDva as $key=>$value) {
	// 	$nizDva[$key] = "val";
	// }
	echo "<br />";
	print_r($aksdokasd);
	echo "<br />";

	print_r($nizDva);
	echo "<br />";
	var_dump($nizDva);

// echo "<pre>";
// 	print_r($nizTri);
// echo "</pre>";
?>
	</body>
</html>