<?php
include "database.php";
error_reporting(E_PARSE);
	ob_start();
	session_start();
		if($_SESSION['slgnuser']!=="" && $_SESSION['slgnpwd']!=="" && $_SESSION['sid']!==""){	
		 $sid=$_GET['sid'];
	  $q="select * from d_student where d_sid=".$sid;
	$res=mysqli_query($con,$q);
	if((mysqli_num_rows($res)>0)){
		
			while($rows=mysqli_fetch_array($res)){
				 $suname=$rows['d_suname'];
				$semail=$rows['d_semail'];
				$sgender=$rows['d_sgender'];
				$slang=$rows['d_slang'];
				
	}}
		
	?>

<!DOCTYPE html>
<html>
<head>
<title>Student Register Form</title>
<?php  include "header.php"; ?>

</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light">
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link-register" href="register.php">register</a>
    </li> &nbsp;&nbsp;
    <li class="nav-item">
      <a class="nav-link-view" href="view_student_details.php">view</a>
    </li> &nbsp;&nbsp
    <li class="nav-item">
      <a class="nav-link-logout" href="logout.php">logout</a>
    </li>
  </ul>
</nav>
<div class="container">
<h1>Update Register Form</h1>
<form method="post" action="update_register_ckeck.php" name="u_rgstrform">
<input type="hidden" name="u_sid" value="<?php echo $sid; ?>"></input>
<label class="l_stuname">Name</label><input type="text" name="u_stuname" value="<?php echo $suname ?>" required ></input><br/>
<label class="l_stuemail">Email</label><input type="email" name="u_stuemail" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" value="<?php echo $semail ?>" required ></input><br/>
<label class="gender_heading">Select Your gender:</label><br/>
<?php if(!empty($sgender) && $sgender=='Female'){?>
<input type="radio" name="u_stugen" value="Female" checked >Female</input>
<input type="radio" name="u_stugen" value="Male" >Male</input><br/>
<?php }
	else if(!empty($sgender) && $sgender=='Male'){
	?>
	<input type="radio" name="u_stugen" value="Female" >Female</input>
<input type="radio" name="u_stugen" value="Male" checked >Male</input><br/>
	<?php } ?>
<label class="Language_heading">Select Your Language:</label><br/>
<?php if(!empty($slang) && count($slang)>0){
	//print_r(explode(",", $slang));
	?>

<input type="checkbox" name="u_stu_lang[]" value="Telugu" <?php echo((in_array("Telugu", explode(",", $slang)))?"checked=checked":""); ?> >Telugu</input>
<input type="checkbox" name="u_stu_lang[]" value="English" <?php echo((in_array("English", explode(",", $slang)))?"checked=checked":""); ?>>English</input>
<input type="checkbox" name="u_stu_lang[]" value="Hindi" <?php echo((in_array("Hindi", explode(",", $slang)))?"checked=checked":""); ?> >Hindi</input><br/>
<?php }else
{?>
	
	<input type="checkbox" name="u_stu_lang[]" value="Telugu" >Telugu</input>
	<input type="checkbox" name="u_stu_lang[]" value="English" >English</input>
	<input type="checkbox" name="u_stu_lang[]" value="Hindi" >Hindi</input><br/>
<?php
}
?>
<input type="submit" name="u_regsubmit_update" value="UPDATE"></input>
</form>
</div>
</body>
</html>
		<?php
		}
		else{
			
			header("Location:index.php");
		}
		?>