<?php 
session_start();
if(isset($_POST['submit'])) {
	if($_POST['username'] === 'petar' && $_POST['password'] === 'sifra123') {
		$_SESSION['logged'] = array(
			'username' => $_POST['username'],
			'password' => $_POST['password'],
		);
		header('Location: index.php');
	} else {
		header('Location: index.php?error');	
	}
} else {
	header('Location: index.php?error');
}
?>