<?PHP
include "C:/wamp64/www/integration/OneTech/entities/livraison.php";
include "C:/wamp64/www/integration/OneTech/core/livraisonC.php";

if (isset($_POST['ID_commande']) and isset($_POST['adresse']) and isset($_POST['date']) ){
$livraison1=new livraison($_POST['idL'],$_POST['ID_commande'],$_POST['adresse'],$_POST['date']);

$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: index.php');
	
}else{
	echo "vérifier les champs";
}

?>