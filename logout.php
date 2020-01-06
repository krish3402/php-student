<?php
error_reporting(E_PARSE);
	ob_start();
	session_start();
	$_SESSION['slgnuser']='';
	$_SESSION['slgnpwd']='';
	$_SESSION['sid']='';
	if(empty($_SESSION['slgnuser']) && empty($_SESSION['slgnpwd']) && empty($_SESSION['sid'])){
		
		header("Location:index.php");
	}
	
 ?>