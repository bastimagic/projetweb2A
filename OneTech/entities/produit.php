<?php
include "config.php";
class produit
{   
	private $imageP;
	private $nomP;
	private $descP;
	private $qteP;
	private $prixP;
	private $idC;
	private $note;
	private $choix;
	private $nb_note;
	public function __construct($idP,$imageP,$nomP,$descP,$qteP,$prixP,$idC)
	{
		$this->idP=$idP;
		$this->imageP=$imageP;
		$this->nomP=$nomP;
        $this->descP=$descP;
        $this->qteP=$qteP;
        $this->prixP=$prixP;
        $this->idC=$idC;
	}
	public function getnomP(){return $this->nomP ;}
	public function getprixP(){return $this->prixP ;}
	public function getCat(){return $this->idC ;}
	public function getimageP(){return $this->imageP ;}
	public function getdescP(){return $this->descP ;}
	public function getQuant(){return $this->qteP ;}
	public function getNote(){return $this->note ;}
	public function getChoix(){return $this->choix ;}
	public function getNb(){return $this->nb_note ;}
	public function setnomP($nomP){$this->nomP=$nomP;}
	public function setprixP($prixP){$this->prixP=$prixP;}
	public function setCat($idC){$this->idC=$idC;}
	public function setQuant($qteP){$this->qteP=$qteP;}
	public function setimageP($imageP){$this->imageP=$imageP;}
	public function setNote($note){$this->note=$note ;}
	public function setChoix($choix){ $this->choix=$choix ;}
	public function setNb($nb){ $this->nb_note=$nb ;}
	function ajouter()
	{
		try
		{
			$db=config::getConnexion();
			$req=$db->prepare('INSERT into produit(imageP,nomP,descP,qteP,prixP,idC) values(:imageP,:nomP,:descP,:qteP,:prixP,:idC)');
	    $req->bindValue(':imageP',$this->imageP);
        $req->bindValue(':nomP',$this->nomP);
        $req->bindValue(':descP',$this->descP);
        $req->bindValue(':qteP',$this->qteP);
        $req->bindValue(':prixP',$this->prixP);
        $req->bindValue(':idC',$this->idC);
			$req->execute();
		}
		catch(Exception $e)
		{
			die('erreur' . $e->getMessage());
		}
	}
	/*public function afficherUnProduit($idd)
    {
        
        $sql = "SELECT * FROM produit WHERE id=$idd";
        $c=config::getConnexion();
       $result = $c->query($sql);
       
 return $result ;
	}*/
}
?>