	<?php
	include "database.php";
	session_start();
	
	if($_SESSION['slgnuser']!=="" && $_SESSION['slgnpwd']!=="" ){
		
if(isset($_POST['regsubmit'])){
	 $_SESSION['slgnuser'];
	 $stuname=$_POST['stuname'];
	 $stuemail=$_POST['stuemail'];
	 $stugen=$_POST['stugen'];
		if(!empty($_POST['stu_lang'])) {
		// Counting number of checked checkboxes.
		 $checked_count = count($_POST['stu_lang']);
		//echo "You have selected following ".$checked_count." option(s): <br/>";
		// Loop to store and display values of individual checked checkbox.		
		  $s=implode(",",$_POST['stu_lang']);
		  $q='INSERT INTO d_student (d_suname,d_semail,d_sgender,d_slang) VALUES ('.'"'.$stuname.'","'.$stuemail.'","'.$stugen.'","'.$s.'"'.')';
				 $q1="select * from d_student";
				 $res1=mysqli_query($con,$q1);
				// echo $num=mysqli_num_rows($res1);
		if((mysqli_num_rows($res1)>0)){			
			
			while($rows=mysqli_fetch_array($res1)){
				if($rows['d_semail']==$stuemail){
			 header("Location: register.php?emailcheckerror='email already exist'");
				}
				else{
				$res=mysqli_query($con,$q);
			
			 header("Location: view_student_details.php");
				}
			}
		}else{
			$res=mysqli_query($con,$q);
			
			 header("Location: view_student_details.php");
		}
		
		}
		else{
		echo "<b>Please Select Atleast One Option.</b>";
		}
	}
	
	
	
	}
	
	else{
			
			header("Location:index.php");
		}
?>