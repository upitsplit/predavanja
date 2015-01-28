<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Server SuperGlobal</title>
	<style type="text/css">
		pre {
			font-size: 125%;
			font-family: "Verdana";

		}
	</style>
</head>
<body>
	<pre>
<?php 	
//kako koristimo dvostruke navodnike "" mozemo varijable ispisati unutar navodnika
// a ne prekidati navodnike i koristiti konkatenaciju
		foreach($_SERVER as $key=>$value) {
			echo "[ $key ] => [ $value ] <br />";
		}
?>
	</pre>
</body>
</html>