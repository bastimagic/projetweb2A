<?php
include "../config.php";                      
$idP=$_POST['refe'];
$note=$_POST['note'];
$db = config::getConnexion();  
$result=$db->prepare("UPDATE produit SET `note`=`$note` WHERE `produit`.`idP`='$idP'");
$result->execute();

header('location: index.php');
?>