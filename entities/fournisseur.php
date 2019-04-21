<?PHP
class fournisseur{
	private $nomF;
	private $idF;
	private $adresseF;
	private $telF;
	

	function __construct($nomF,$idF,$adresseF,$telF){
		$this->nomF=$nomF;
		$this->idF=$idF;
		$this->adresseF=$adresseF;
		$this->telF=$telF;
	
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
	
	
}

?>
