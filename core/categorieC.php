<?PHP
include "../config.php";
class categorieC {
function affichercategorie ($categorie){
		
		echo "nomC: ".$categorie->getnomC()."<br>";
		echo "lienC: ".$categorie->getlienC()."<br>";
		
	}
	
	function ajoutercategorie($categorie){
		$sql = "insert INTO `categorie` (nomC,lienC) VALUES (:nomC,:lienC)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nomC',$categorie->getnomC());
		$req->bindValue(':lienC',$categorie->getlienC());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function affichercategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.= a.adresseF";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercategorie($idC){
		$sql="DELETE FROM categorie where idC= :idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercategorie($categorie,$idC){
		$sql="UPDATE categorie SET idC=:idCn nomC=:nomC lienC=:lienC WHERE idC=:idC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idCn=$categorie->getidC();
       
        $nomC=$categorie->getnomC();
        $lienC=$categorie->getlienC();

		$datas = array(':idCn'=>$idCn, ':idC'=>$idC, ':nomC'=>$nomC, ':lienC'=>$lienC);

		$req->bindValue(':idCn',$idCn);
		$req->bindValue(':idC',$idC);

		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':lienC',$lienC);
	
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($idC){
		$sql="SELECT * from categorie where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecategorie($idC){
		$sql="SELECT * from categorie where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>