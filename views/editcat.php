<?php

include "../config.php";
 $nomC=$_POST['nomC'];
 $lienC=$_POST['lienC'];
 $idC = $_POST['idCe'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE categorie SET `nomC`='$nomC' , `lienC`='$lienC' WHERE `categorie`.`idC`='$idC' ");
$result->execute();
header('location: tables-categorie.php');


  ?>