<!doctype html>
<html>
	<head>
		<title>Nizovi</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Nizovi</h1>
		<pre>
<?php 
		$niz = array(26, 'Mate', 1.2, 28, 30);

		// print_r($niz);

		
		$asocNiz = array(
			'ID' => $niz,
			'ime' => 'Mate',
			'prosjek' => 1.2,
			'dob' => 28,
			'ECTS' => 30,
		);

		print_r($asocNiz);
		echo $asocNiz['ID'][1];
?>
	</pre>
	</body>
</html>
