<?php
include "../config.php";
$db=config::getConnexion();
if (isset($_GET['del'])) {
	$idF = $_GET['del'];
	$emps=$db->query("DELETE FROM fournisseur WHERE idF=$idF");
	
	header('location: tables-fournisseurs.php');
}
