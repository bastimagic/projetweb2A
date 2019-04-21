<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['nomC']) and isset($_POST['lienC'])){
$categorie1=new categorie($_POST['nomC'],$_POST['idC'],$_POST['lienC']);

$categorie1C=new categorieC();
$categorie1C->ajoutercategorie($categorie1);
header('Location: tables-categorie.php');
	
}
else{
	echo "vérifier les champs";
}

?>