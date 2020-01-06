<?php 

include "database.php";
error_reporting(E_PARSE);
	ob_start();
	session_start();
		if($_SESSION['slgnuser']!=="" && $_SESSION['slgnpwd']!=="" && $_SESSION['sid']!==""){
			if(isset($_POST['u_regsubmit_update'])){
				$sname=$_POST['u_stuname'];
				$stuemail=$_POST['u_stuemail'];
				$u_stugen=$_POST['u_stugen'];
				$u_stu_lang=implode(",",$_POST['u_stu_lang']);
				$sid=$_POST['u_sid'];

  $uq='update d_student set d_suname="'.$sname.'",d_semail="'.$stuemail.'",d_sgender="'.$u_stugen.'",d_slang="'.$u_stu_lang.'" where d_sid='.$sid;
	if(($ures=mysqli_query($con,$uq))){
	//if((mysqli_num_rows($ures)>0)){
		 header("Location: view_student_details.php");
		}
	else{			
			
			 header("Location: update_register.php?sid=".$sid);
		}
			}
		}
?>