<?PHP
class categorie{
	private $nomC;
	private $idC;
	private $lienC;


	function __construct($nomC,$idC,$lienC){
		$this->nomC=$nomC;
		$this->idC=$idC;
		$this->lienC=$lienC;	
	
	}
	
	function getnomC(){
		return $this->nomC;
	}
	function getidC(){
		return $this->idC;
	}
	function getlienC(){
		return $this->lienC;
	}
	
    function setnomC($nomC){
		$this->nomC=$nomC;
	}
	
	function setidC($idC){
		$this->idC=$idC;
	}
	function setlienC($lienC){
		return $this->lienC;
	}
	
}

?>
