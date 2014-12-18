<?php session_start(); ?>
<html>
<head>
	<title>Početna stranica</title>
	<meta charset="utf-8" />
</head>
<body>
<?php 
	if(isset($_SESSION['logged'])) {
		echo "Logged in"; ?>
	<form action="logout.php" method="post">
		<input type="submit" name="logout" value="Logout" />
	</form>	
<?php 
	} else {
 ?>
	<h1>Prijavite se kako biste mogli vidjeti sadržaj stranice</h1>
	<form action="login.php" method="post">
		<input type="text" name="ime" value="" />
		<input type="password" name="pass" value="" />
		<input type="submit" name="submit" value="Log in" />
	</form>
	<?php } ?>
</body>
</html>