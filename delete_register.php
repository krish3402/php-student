<?php



include "database.php";

if(isset($_GET['sid']))
{
	//echo $_GET['sid'];
     $sql = "DELETE FROM d_student WHERE d_sid=".$_GET['sid'];
     mysqli_query($con,$sql);
	 echo 'Deleted successfully.';
}


?>