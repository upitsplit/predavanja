<?php 
session_start();
	if(isset($_POST['submit'])) {
		if($_POST['ime'] === 'petar' && $_POST['pass'] === 'sifra') {
			$_SESSION['logged'] = true;
			header('Location: index.php');
		}
	}

?>