<?php
error_reporting(E_PARSE);
	ob_start();
	session_start();
		if($_SESSION['slgnuser']!=="" && $_SESSION['slgnpwd']!=="" && $_SESSION['sid']!==""){	
	
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
	<div class="container-fluid ">
	<span class=" mt-5">Student Register Form</span>
	<form method="post" action="registercheck.php" name="rgstrform">
	<p><?php echo $_GET['emailcheckerror']; ?></p>
	<label class="l_stuname">Name</label><input type="text" name="stuname" value="" required ></input><br/>
	<label class="l_stuemail">Email</label><input type="email" name="stuemail" value="" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" required ></input><br/>
	<label class="gender_heading">Select Your gender:</label><br/>
	<input type="radio" name="stugen" value="Female" >Female</input>
	<input type="radio" name="stugen" value="Male" checked="checked" >Male</input><br/>
	<label class="Language_heading">Select Your Language:</label><br/>
	<input type="checkbox" name="stu_lang[]" value="Telugu" >Telugu</input>
	<input type="checkbox" name="stu_lang[]" value="English" >English</input>
	<input type="checkbox" name="stu_lang[]" value="Hindi" >Hindi</input><br/>
	<input type="submit" name="regsubmit" value="SUBMIT"></input>
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