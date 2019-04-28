<?PHP
class categorie{
	private $nomC;
	private $idC;



	function __construct($nomC,$idC){
		$this->nomC=$nomC;
		$this->idC=$idC;
	}
	
	function getnomC(){
		return $this->nomC;
	}
	function getidC(){
		return $this->idC;
	}
	
    function setnomC($nomC){
		$this->nomC=$nomC;
	}
	
	function setidC($idC){
		$this->idC=$idC;
	}

}

?>
