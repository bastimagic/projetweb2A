<?PHP
include "../entities/fournisseur.php";
include "../core/fournisseurC.php";

if (isset($_POST['nomF']) and isset($_POST['adresseF']) and isset($_POST['telF'])){
$fournisseur1=new fournisseur($_POST['nomF'],$_POST['idF'],$_POST['adresseF'],$_POST['telF']);

$fournisseur1C=new fournisseurC();
$fournisseur1C->ajouterfournisseur($fournisseur1);
header('Location: tables-fournisseurs.php');
	
}
else{
	echo "vérifier les champs";
}

?>