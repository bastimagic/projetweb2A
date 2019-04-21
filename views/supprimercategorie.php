<?php
include "../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$idC = $_GET['del'];
	$emps=$db->query("DELETE FROM categorie WHERE idC=$idC");
	
	header('location: tables-categorie.php');
}
