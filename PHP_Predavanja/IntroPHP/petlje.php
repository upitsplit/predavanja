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

	$nizTri = array($niz, $nizDva, array(2, 5, 1, "Trololo"), 
					array_merge($niz, $nizDva));
	
	//for petlja
	for($i = 0; $i < count($niz); $i++) {
		echo $niz[$i] . "<br />";
	}
	//while petlja

	//foreach petlja
	var_dump($nizDva);
	foreach($nizDva as $k=>$v) {
		echo $k . " " . $v . "<br />";
	}

?>
	</body>
</html>