<?php
session_start();
if (isset($_SESSION['Email']))
{
	$_SESSION['Email']='';
	$_SESSION['Password']='';
	unset($_SESSION['Email']);
	unset($_SESSION['Password']);
}

session_destroy();
header('Location: index.php');
?>