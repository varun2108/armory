<?php
session_start();
$_SESSION['user']='null';
	$_SESSION['pass']='null';
	header('Location: index.php');
?>