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
	<form action="" method="post">
		<input type="text" name="ime" value="" placeholder="Ime"> <br />
		<input type="password" name="lozinka" value="" placeholder="lozinka"> <br />

		<label><input type="radio" name="spol" value="musko">Musko <br /></label>
		<label><input type="radio" name="spol" value="zensko">Zensko <br /></label>
		
		<label><input type="checkbox" name="aktivnost" value="plivanje"> Plivanje </label>
		<label><input type="checkbox" name="aktivnost" value="kosarka"> Kosarka </label>
		<label><input type="checkbox" name="aktivnost" value="nogomet"> Nogomet </label> <br />

		<input type="submit" value="Submit" />
	</form>
	<pre>
<?php 
	if(!empty($_POST)) {
		var_dump($_POST);
	}
?>
	</pre>
</body>
</html>