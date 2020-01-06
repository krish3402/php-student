<?php
error_reporting(E_PARSE);
include "database.php";
	session_start();	
	if($_SESSION['slgnuser']!=="" && $_SESSION['slgnpwd']!=="" ){
		$q="select * from d_student  where d_sid=".$_GET['sid'];
		$res=mysqli_query($con,$q);
		if((mysqli_num_rows($res)>0)){
				while($rows=mysqli_fetch_array($res)){
					 $sid=$rows['d_sid'];
					echo 'id :'.$sid;
					echo ', uname :'.$rows['d_suname'];	
					echo ', email:'.$rows['d_semail'];	
					echo ', gender:'.$rows['d_sgender'];						
					echo ', slang:'.$rows['d_slang'];		  
				}
					}
		
	}
	else
	{header("Location:index.php");}
	
	?>