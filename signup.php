<?php
	session_start();
	require_once 'client.php';
	
	$name = $_POST['name'];
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$pass_con = $_POST['pass_con'];	
	
	mysql_query($connect, query: "INSERT INTO `users` (`id`, `name`, `login`, `pass`) VALUES ('', '$name', '$login', '$pass')");
	die 'ok';
	

?>
