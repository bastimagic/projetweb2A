<?PHP
class fournisseur{
	private $nomF;
	private $idF;
	private $adresseF;
	private $telF;
	private $idC;
	

	function __construct($nomF,$idF,$adresseF,$telF,$idC){
		$this->nomF=$nomF;
		$this->idF=$idF;
		$this->adresseF=$adresseF;
		$this->telF=$telF;
	    $this->idC=$idC;
	}
	
	function getnomF(){
		return $this->nomF;
	}
	function getidF(){
		return $this->idF;
	}
	function getadresseF(){
		return $this->adresseF;
	}
	function gettelF(){
		return $this->telF;
	}

	function getidC(){
		return $this->idC;
	}
	
	
    function setnomF($nomF){
		$this->nomF=$nomF;
	}
	function setadresseF($adresseF){
		$this->adresseF=$adresseF;;
	}
	function settelF($telF){
		$this->telF=$telF;
	}
	function setidF($idF){
		$this->idF=$idF;
	}
	function setidC($idC){
		$this->idC=$idC;
	}
	
	
}

?>
