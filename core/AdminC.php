<?PHP
include "../config.php";

class AdminC {

	
	function ajouterAdmin($admin){
		$sql="insert into admin (userName,Email,Password) values (:userName,:Email,:Password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $username=$admin->getuserName();
        $email=$admin->getEmail();
        $Password=$admin->getPassword();
        
		$req->bindValue(':userName',$username);
		$req->bindValue(':Email',$email);
		$req->bindValue(':Password',$Password);
		
		
		
            if($req->execute())
            {
            	return true;
            }
            else
            {
            	return false;
            }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function recupererAdmin($email,$Password)
	{		

		$sql="select * from admin where Email='".$email."' and Password='".$Password."'";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		
         if ($liste->rowCount() > 0 )
         {
         	return true ;
         }
         else {
         	return false;
         }       

         }
       


        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }


	}
	function recupererUser($Password)
	{		

		$sql="select userName from admin where  Password='".$Password."'";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		
         if ($liste->rowCount() > 0 )
         {
         	return true ;
         }
         else {
         	return false;
         }       

         }
       


        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }


	}
	
	
    public function exist()
    {
        $db=config::getConnexion();
        $req=$db->prepare('SELECT * FROM admin WHERE Email=:Email');
        $req->bindValue(':Email',$this->email);
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