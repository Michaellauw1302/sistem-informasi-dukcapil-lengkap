<?php 

session_start();
$_SESSION = [];

session_unset();

session_unset();

	//menghapus cookie
	setcookie('id', '', time() - 3600);
	setcookie('key', '', time() - 3600);
	//menghapus session
	session_destroy();


	header("Location: ../index.php");
	exit;


?>