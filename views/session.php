
<?php
include 'menus.php';
include "../entities/admin.php";
include "../core/AdminC.php";

testConnexion();
	
if (isset($_POST['Email'])&&isset($_POST['Password']))
{
    
    $Admin=new Admin("",$_POST['Email'],$_POST['Password']);
    if ($Admin->exist())
    {
        $_SESSION['Email']=$_POST['Email'];
        $_SESSION['Password']=$_POST['Password'];
        
		header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="session.css">
<body style="background-color:#000000">

<div class="login">
	<h1>Login</h1>
    <form method="post" action="session.php" id="connexion">
    	<input type="email" class="form-control" placeholder="Email" id="Email" name="Email"/>
        <input type="password"  placeholder="Password" id="Password" name="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>
<script src="page-login.js"></script>
</body>
</html>

