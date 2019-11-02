<?php
include 'connection.php';
session_start();

	unset($_SESSION['login']);
	$_SESSION['login']=NULL;
	session_destroy();
	header('location:login.php');

?>