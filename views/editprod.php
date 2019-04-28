<?php

include "../config.php";
 $imageP=$_POST['imageP'];
 $idP = $_POST['idPe'];
 $nomP=$_POST['nomP'];
 $descP=$_POST['descP'];
 $qteP=$_POST['qteP'];
 $prixP=$_POST['prixP'];
 $idC=$_POST['idC'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE produit SET `imageP`='$imageP' , `nomP`='$nomP' , `descP`='$descP' , `qteP`='$qteP' , `prixP`='$prixP' , `idC`='$idC' WHERE `produit`.`idP`='$idP' ");
$result->execute();
header('location: tables-produits.php');


  ?>