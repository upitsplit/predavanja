<?php session_start(); ?>
<html>
<head>
	<title>Početna stranica</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php if(isset($_GET['error'])) {
		echo "Krivi unos!";
	}
	
	if(isset($_SESSION['logged'])) {
		echo file_get_contents("http://upitsplit.hr");
	} else {	?>

	<h1>Prijavite se kako biste mogli vidjeti sadržaj stranice</h1>
	<form action="login.php" method="post">
		<input type="text" name="username" value="" placeholder="username" />
		<input type="password" name="password" value="" placeholder="pass" />
		<input type="submit" name="submit" value="Log in" />
	</form>	
	<?php } ?>
</body>
</html>