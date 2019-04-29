<?php
require_once "C:/wamp64/www/integration/integration/OneTech/core/client.php";
//echo $_POST['mail'];

$clientt=new clientc();
$clientt->deconnexionclient();
require_once("index.php");
?>
