<?php 

include "database.php";
error_reporting(E_PARSE);
	ob_start();
	session_start();
if(isset($_POST['lgnsubmit'])){
	 $user_name=$_POST['lgnusername'];
	 $password=$_POST['lgnpwd'];
	 $q='select d_id,d_uname,d_lgnpwd from login where d_uname="'.$user_name.'"&& d_lgnpwd="'.$password.'"';
	$qry=mysqli_query($con,$q);
	if((mysqli_num_rows($qry)>0)){
		while($rows=mysqli_fetch_array($qry)){
			echo $lgnuser=$rows['d_uname'];
			echo	 $lgnpwd=$rows['d_lgnpwd'];
			echo	 $lgnid=$rows['d_id'];
			$_SESSION['sid']=$lgnid;
			$_SESSION['slgnuser']=$user_name;
			$_SESSION['slgnpwd']=$password;
			
		}
		if(($_SESSION['sid']!=="")&& ($_SESSION['slgnuser']!=="") && ($_SESSION['slgnpwd'] !==""))
						{
						header("Location:register.php");
						}
						else{
							header("Location:index.php");
							
						}
		
	}
	else{
							header("Location:index.php");
							
						}
	
}
else{
header("Location:index.php");
}

?>
