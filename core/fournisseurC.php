<?PHP
include "../config.php";
class fournisseurC {
function afficherfournisseur ($fournisseur){
		
		echo "nomF: ".$fournisseur->getnomF()."<br>";
		echo "adresseF: ".$fournisseur->getadresseF()."<br>";
		echo "telF: ".$fournisseur->gettelF()."<br>";
		
	}
	
	function ajouterfournisseur($fournisseur){
		$sql = "insert INTO `fournisseur` (nomF,adresseF,telF) VALUES (:nomF,:adresseF,:telF)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nomF',$fournisseur->getnomF());
		$req->bindValue(':adresseF',$fournisseur->getadresseF());
		$req->bindValue(':telF',$fournisseur->gettelF());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherfournisseurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.= a.adresseF";
		$sql="SElECT * From fournisseur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfournisseur($idF){
		$sql="DELETE FROM fournisseur where idF= :idF";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idF',$idF);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierfournisseur($fournisseur,$idF){
		$sql="UPDATE fournisseur SET idF=:idFn, adresseF=:adresseF,nomF=:nomF,telF=:telF WHERE idF=:idF";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $idFn=$fournisseur->getidF();
        $adresseF=$fournisseur->getadresseF();
        $nomF=$fournisseur->getnomF();
        $telF=$fournisseur->gettelF();
		$datas = array(':idFn'=>$idFn, ':idF'=>$idF,':adresseF'=>$adresseF, ':nomF'=>$nomF,':telF'=>$telF);

		$req->bindValue(':idFn',$idFn);
		$req->bindValue(':idF',$idF);
		$req->bindValue(':adresseF',$adresseF);
		$req->bindValue(':nomF',$nomF);
		$req->bindValue(':telF',$telF);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererfournisseur($idF){
		$sql="SELECT * from fournisseur where idF=$idF";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListefournisseur($idF){
		$sql="SELECT * from fournisseur where idF=$idF";
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