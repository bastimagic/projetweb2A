<?PHP
class produit{
	private $imageP;
	private $idP;
	private $nomP;
	private $descP;
	private $qteP;
	private $prixP;
	private $idC;

	function __construct($imageP,$idP,$nomP,$descP,$qteP,$prixP,$idC){
		$this->imageP=$imageP;
		$this->idP=$idP;
		$this->nomP=$nomP;
		$this->descP=$descP;
		$this->qteP=$qteP;
		$this->prixP=$prixP;
		$this->idC=$idC;
	}
	
	function getimageP(){
		return $this->imageP;
	}
	function getidP(){
		return $this->idP;
	}
	function getnomP(){
		return $this->nomP;
	}
	function getdescP(){
		return $this->descP;
	}
	function getqteP(){
		return $this->qteP;
	}
	function getprixP(){
		return $this->prixP;
	}
	function getidC(){
		return $this->idC;
	}
	
    function setimageP($imageP){
		$this->imageP=$imageP;
	}
	function setnomP($nomP){
		$this->nomP=$nomP;;
	}
	function setdescP($descP){
		$this->descP=$descP;
	}
	function setidP($idP){
		$this->idP=$idP;
	}
	function setqteP($qteP){
		$this->qteP=$qteP;
	}
	function setprixP($prixP){
		$this->prixP=$prixP;
	}
	function setidC($idC){
		$this->idC=$idC;
	}
	
	
}

?>
