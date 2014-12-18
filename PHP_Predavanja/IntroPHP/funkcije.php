<?php 
	function printInput($formInput) {
		echo "<label>$formInput[0]<input type='$formInput[1]' name='$formInput[2]' value='$formInput[3]' /></label>";
	}

?>
<!doctype html>
<html>
	<head>
		<title>Forme</title>
		<meta charset="utf-8" />
	</head>
	<body>
<?php 
	$formInputs = array(
		array('Ime', 'text', 'ime', null),
		array('Lozinka', 'password', 'password', ''),
		array('', 'submit', 'submit', 'Prihvati'),
	);
	echo "<form action='' method='post'>";
	for($i = 0; $i < count($formInputs); $i++)
		printInput($formInputs[$i]);
	echo "</form>";
?>
	</body>
</html>