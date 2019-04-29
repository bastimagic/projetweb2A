<?php
	include "../config.php";
	class clientc
	{
		public function ajouterclient($client)
			{
				$sql="INSERT INTO `client`(`nomclient`, `cin`, `mail`, `telephone`, `adresse`, `motdepasse`, `datee`, `status`) VALUES (:nomclient,:cin,:mail,:telephone,:adresse,:motdepasse,:datee,:status);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":nomclient",$client->getnomclient());

				$rep->bindValue(":cin",$client->getcin());
				$rep->bindValue(":mail",$client->getmail());
				$rep->bindValue(":telephone",$client->gettelephone());
				$rep->bindValue(":adresse",$client->getadresse());
				$rep->bindValue(":motdepasse",$client->getmotdepasse());
				$rep->bindValue(":datee",$client->getdatee());
				$rep->bindValue(":status",$client->getstatus());
				$rep->execute();


			}
			public function verifexist($client)
			{
				$i=0;
				$sql="SELECT * FROM `client` WHERE cin = '".$client->getcin()."' or mail ='".$client->getmail()."' or motdepasse ='".$client->getmotdepasse()."'  or telephone ='".$client->gettelephone()."'";
   				$connexion=config::getConnexion();
  				$rep=$connexion->query($sql);
  				$donnees = $rep->fetch();
  				if($donnees['mail']==$client->getmail())
  				{
  					echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Adresse mail
                <strong class='green'>deja existante</strong>
                </center></div>";
  					$i=1;
  				}
  				if($donnees['cin']==$client->getcin())
  				{
  					 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Numéro carte d'identité
                <strong class='green'>deja existante</strong>
                </center></div>";
               $i=1;
  				}
  				if($donnees['motdepasse']==$client->getmotdepasse())
  				{
  					echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Mot de passe
                <strong class='green'>deja existante</strong>
                </center></div>";
  					$i=1;
  				}
  				if($donnees['telephone']==$client->gettelephone())
  				{
  					echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Numéro de téléphone
                <strong class='green'>deja existante</strong>
                </center></div>";
  					$i=1;
  				}
				return $i;
			}
      public function modifierclient($client,$cin)
      {
        $sql="UPDATE `client` SET `nomclient`=:nomclient,`cin`=:cin,`mail`=:mail,`telephone`=:telephone,`adresse`=:adresse,`motdepasse`=:motdepasse WHERE cin = '".$cin."' ;";


        $connexion=config::getConnexion();
        $rep=$connexion->prepare($sql);
        $rep->bindValue(":nomclient",$client->getnomclient());

        $rep->bindValue(":cin",$client->getcin());
        $rep->bindValue(":mail",$client->getmail());
        $rep->bindValue(":telephone",$client->gettelephone());
        $rep->bindValue(":adresse",$client->getadresse());
        $rep->bindValue(":motdepasse",$client->getmotdepasse());
        $rep->execute();
      }
      public function connexionclient($mail,$motdepasse)
      {
          session_start();
        $status="activer";
        $sqll="select * from client where mail='".$mail."' and motdepasse='".$motdepasse."'";
        $connexion=config::getConnexion();
        $repp=$connexion->query($sqll);
        $donnees = $repp->fetch();
        //echo $donnees['mail'];
        //echo $donnees['status'];
        if(($donnees['mail']==$mail)&&($donnees['motdepasse']==$motdepasse)&&($donnees['status']=="activer"))
        {
        echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Bienvenue
                <strong class='green'>".$donnees['nomclient']."</strong> vous etez connecter
                </div>";
        $_SESSION['nomclient']=$donnees['nomclient'];
              $_SESSION['motdepasse']=$donnees['motdepasse'];

        $_SESSION['cin']=$donnees['cin'];
        $_SESSION['mail']=$donnees['mail'];
        $_SESSION['telephone']=$donnees['telephone'];
        $_SESSION['adresse']=$donnees['adresse'];
        }
            else if ($donnees['status']=="desactiver")
            {

              echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Votre compte est désactivé
                </div>";
            }
            else
            {
              echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Erreur de connexion le mail ou le mot de passe sont erronées
                </div>";
            }



        /*$i=0;
        $sql="select * from client where mail='".$mail."' and motdepasse='".$motdepasse."'";
        $connexion=config::getConnexion();
        $rep=$connexion->query($sql);
        $rep->execute();
         if (empty($rep))
                {
                    echo "1";
                }
             else {
              echo "2";
                $sqll="UPDATE `client` SET `status`=:status WHERE motdepasse = '".$motdepasse."' ;";
          $status="on";
          $repp=$connexion->prepare($sql);
          $repp->bindValue(":status",$status);
          $repp->execute();
           }
          }*/
        }
        public function deconnexionclient()
      {
        session_start();
        session_unset();
            session_destroy();
              echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               Vous etez déconnecter
                </div>";

      }

		public function rechercheclient($mail,$cin)
			{
				$sqll="select * from client where mail='".$mail."' and cin='".$cin."'";
				$connexion=config::getConnexion();
				$repp=$connexion->query($sqll);
				$donnees = $repp->fetch();

        			return $donnees;

 			}

	}
?>
