<?php

function testConnexion()
{
	session_start();
	$end=false;
	if (isset($_SESSION['Email'])&&isset($_SESSION['Password']))
		$end=true;
	
	
	return $end;
}

?>