<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["idL"])){
	$livraisonC->supprimerlivraison($_POST["idL"]);
	header('Location: tablelivraison.php');
}

?>