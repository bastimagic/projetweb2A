<?PHP
include "../config.php";
class livreurC {
function afficherlivreur ($livreur){
		echo "id: ".$livreur->getid()."<br>";
		echo "nom: ".$livreur->getnom()."<br>";
		echo "prenom: ".$livreur->getprenom()."<br>";
		echo "numero: ".$livreur->getnum()."<br>";
		
	}
	function ajouterlivreur($livreur){
		$sql="insert INTO livreur (nom,prenom,numero) VALUES (:nom,:prenom,:numero)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $numero=$livreur->getnum();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		$sql="select * from livreur ORDER BY nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($id){
		$sql="DELETE FROM livreur where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$id){
		$sql="UPDATE livreur SET id=:idd, nom=:nom,prenom=:prenom,numero=:numero WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idd=$livreur->getid();
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $numero=$livreur->getnum();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':numero'=>$numero);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numero',$numero);
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivreur($id){
		$sql="SELECT * from livreur where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivreur($nom){
		$sql="SELECT * from livreur where nom=$nom";
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