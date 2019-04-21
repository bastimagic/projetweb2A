<?php

include "../config.php";
 $nomF=$_POST['nomF'];
 $idF = $_POST['idFe'];
 $adresseF=$_POST['adresseF'];
 $telF=$_POST['telF'];

$db=config::getConnexion();
$result=$db->prepare("UPDATE fournisseur SET `nomF`='$nomF' , `adresseF`='$adresseF' , `telF`='$telF' WHERE `fournisseur`.`idF`='$idF' ");
$result->execute();
header('location: tables-fournisseurs.php');


  ?>