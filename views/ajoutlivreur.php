<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";

if ( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['numero']) ){
$livreur1=new livreur($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['numero']);

$livreur1C=new livreurC();
$livreur1C->ajouterlivreur($livreur1);
header('Location: tablelivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>