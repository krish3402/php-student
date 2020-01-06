
<?php
ob_start();
session_start(); 
 ?>

<!DOCTYPE html>
<html>
<head>
<script src="script_stu.js"></script>
<title>Login Form</title>
<?php  include "header.php"; ?>

</head>
<body>
<div class="container">
 <div class="card card-login mx-auto text-center bg-dark">
 <div class="card-header mx-auto bg-dark">
  <span class="logo_title mt-5">Login Dashboard</span>
 </div>
<div class="card-body">
	<form method="post" action="logincheck.php" name="lgnform">
	  <div class="input-group form-group">
	  <div class="input-group-prepend"> 
	  <span class="input-group-text"><i class="fas fa-user"></i></span>
	  </div>
	  <input placeholder="UserEmail" class="form-control" type="text" name="lgnusername" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" value="" required  ></input>
	</div>
	 <div class="input-group form-group">
	  <div class="input-group-prepend"> 
	 <span class="input-group-text"><i class="fas fa-key"></i></span></div>
	 <input  placeholder="Password" type="password" name="lgnpwd" value="" class="form-control" required></input>
	</div>
	<div class="form-group">
	<input class="btn btn-outline-danger float-right login_btn" type="submit" name="lgnsubmit" value="SUBMIT"></input>
	</div>
	</form>
</div>

</div>
</div>
</body>
</html>
