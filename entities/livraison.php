<?PHP
class livraison{
	private $idL;
	private $ID_commande;
	private $adresse;
	private $date;
	function __construct($idL,$ID_commande,$adresse,$date){
		$this->idL=$idL;
		$this->ID_commande=$ID_commande;
		$this->adresse=$adresse;
		$this->date=$date;
	}
	
	function getidL(){
		return $this->idL;
	}
	function getid(){
		return $this->ID_commande;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getdate(){
		return $this->date;
	}
	

	function setid($ID_commande){
		$this->ID_commande=$ID_commande;
	}
	function setadresse($adresse){
		$this->adresse;
	}
	function setdate($date){
		$this->date=$date;
	}
	
	
}

?>
