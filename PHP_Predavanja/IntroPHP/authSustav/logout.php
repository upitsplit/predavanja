<?php 
$niz = array();
$niz = [];
session_start();
// session_destroy();
$_SESSION['logged'] = null;
header('Location: index.php');
 ?>