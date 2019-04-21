<?PHP
class livreur{
	private $id;
	private $nom;
	private $prenom;
	private $numero;
	function __construct($id,$nom,$prenom,$numero){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numero=$numero;
	}
	
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getnum(){
		return $this->numero;
	}
	

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom;
	}
	function setnum($numero){
		$this->numero=$numero;
	}
	
	
}


?>
