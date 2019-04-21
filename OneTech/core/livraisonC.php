<?PHP
include "C:/wamp64/www/integration/OneTech/config.php";
class livraisonC {
function afficherlivraison ($livraison){
		echo "idL: ".$livraison->getidL()."<br>";
		echo "ID_commande: ".$livraison->getid()."<br>";
		echo "adresse: ".$livraison->getadresse()."<br>";
		echo "date: ".$livraison->getdate()."<br>";
		
	}
	
	function ajouterlivraison($livraison){
		$sql = "insert INTO livraison (ID_commande,adresse,date) VALUES (:ID_commande,:adresse,:date)";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
	
		$req->bindValue(':ID_commande',$livraison->getid());
		$req->bindValue(':adresse',$livraison->getadresse());
		$req->bindValue(':date',$livraison->getdate());
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	
	function afficherlivraisons(){
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($idL){
		$sql="DELETE FROM livraison where idL= :idL";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idL',$idL);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$idL){
		$sql="UPDATE livraison SET idL=:idLn, ID_commande=:ID_commande,adresse=:adresse, date=:date WHERE idL=:idL";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idLn=$livraison->getidL();
        $ID_commande=$livraison->getid();
        $adresse=$livraison->getadresse();
        $date=$livraison->getdate();
		$datas = array(':idLn'=>$idLn, ':idL'=>$idL, ':ID_commande'=>$ID_commande,':adresse'=>$adresse,':date'=>$date);
		$req->bindValue(':idLn',$idLn);
		$req->bindValue(':idL',$idL);
		$req->bindValue(':ID_commande',$ID_commande);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':date',$date);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivraison($idL){
		$sql="SELECT * from livraison where idL=$idL";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivraison($ID_commande){
		$sql="SELECT * from livraison where ID_commande=$ID_commande";
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