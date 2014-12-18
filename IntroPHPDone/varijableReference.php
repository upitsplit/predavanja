<!doctype html>
<html>
<head>
	<title>Reference</title>
</head>
<body>
<?php 
//inicijalizacija varijabli
$ime1 = 'Bruno';
$ime2 = &$ime1;

echo 'Prvo Ime: ' . $ime1 . '<br />';
echo 'Prvo Ime: ' . $ime2 . '<br />';

$ime2 = 'Stipe';
echo 'Prvo Ime: ' . $ime1 . '<br />';
echo 'Prvo Ime: ' . $ime2 . '<br />';

?>
</body>
</html>