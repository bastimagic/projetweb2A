<?php

include "../config.php";
 $imageP=$_POST['imageP'];
 $idP = $_POST['idPe'];
 $nomP=$_POST['nomP'];
 $descP=$_POST['descP'];
 $qteP=$_POST['qteP'];
 $prixP=$_POST['prixP'];
 $categorieP=$_POST['categorieP'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE produit SET `imageP`='$imageP' , `nomP`='$nomP' , `descP`='$descP' , `qteP`='$qteP' , `prixP`='$prixP' , `categorieP`='$categorieP' WHERE `produit`.`idP`='$idP' ");
$result->execute();
header('location: tables-produits.php');


  ?>