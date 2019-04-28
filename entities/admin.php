<?PHP
class Admin{
	private $userName;
	private $Email;
	private $Password;
	
	function __construct($user,$email,$Password){
		$this->userName=$user;
		$this->Email=$email;
		$this->Password=$Password;
		
	}
	
	function getuserName(){
		return $this->userName;
	}
	function getEmail(){
		return $this->Email;
	}
	function getPassword(){
		return $this->Password;
	}
	

	function setuserName($nom){
		$this->userName=$nom;
	}
	function setEmail($email){
		$this->Email=$email;
	}
	function setPassword($Password){
		$this->Password=$Password;
	}
	
	 public function exist()
    {
        $db=config::getConnexion();
        $req=$db->prepare('SELECT * FROM admin WHERE Email=:Email');
        $req->bindValue(':Email',$this->Email);
        $req->execute();
        if ($req->rowCount()==0)
            return false;
        $Admin=$req->fetch();
        if ($Admin['Password']!=$this->Password)
            return false;
        return true;
    }
}


?>