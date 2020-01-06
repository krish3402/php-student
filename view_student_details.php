
<?php  include "header.php"; ?>
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
<?php 
error_reporting(E_PARSE);
include "database.php";
	session_start();	
	if($_SESSION['slgnuser']!=="" && $_SESSION['slgnpwd']!=="" ){
		$q="select * from d_student";
		$res=mysqli_query($con,$q);
		echo '<table><tr><th>S.No.</th><th>Name</th><th>Email</th><th>Languages</th><th>actions</th></tr>';
		if((mysqli_num_rows($res)>0)){
			$sno=1;
			
				while($rows=mysqli_fetch_array($res)){
					 $sid=$rows['d_sid'];
					echo '<tr id="'.$sid.'">';
					echo '<td>'.$sno++.'</td>';	
					echo '<td>'.$rows['d_suname'].'</td>';	
					echo '<td>'.$rows['d_semail'].'</td>';						
					echo '<td>'.$rows['d_slang'].'</td>';
				    echo '<td><a href="update_register.php?sid='.$sid.'" >edit</a> | <a class="remove">Delete</a> | <a class="student_viewDetails" >View</a></td>';
					echo '</tr>';
				}
				echo '<table>';
			
		}
		
	}
	else{
		header("Location:index.php");
	}
?>
<script type="text/javascript">

    $(".remove").click(function(){

        var id = $(this).parents("tr").attr("id");



        if(confirm('Are you sure to remove this record ?'+id))

        {

            $.ajax({

               url: 'delete_register.php',

               type: 'GET',

               data: {sid: id},

               error: function() {

                  alert('Something is wrong');

               },

               success: function(data) {

                   $("#"+id).remove();

                    alert("successfully deleted");  

               }

            });

        }

    });
	
	$(".student_viewDetails").click(function(){

        var id = $(this).parents("tr").attr("id");



            $.ajax({

               url: 'viewDetalsbyId.php',

               type: 'GET',

               data: {sid: id},

               error: function() {

                  alert('Something is wrong');

               },

               success: function(data) {

                  // $("#"+id).remove();

                    alert(data);  

               }

            });

        

    });



</script>