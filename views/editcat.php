<?php

include "../config.php";
 $nomC=$_POST['nomC'];
 $idC = $_POST['idCe'];
 
$db=config::getConnexion();
$result=$db->prepare("UPDATE categorie SET `nomC`='$nomC' WHERE `categorie`.`idC`='$idC' ");
$result->execute();
header('location: tables-categorie.php');


  ?>