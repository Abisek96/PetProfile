 <?php

	
	include("includes/connection.php");


	if (isset($_POST['login'])){
		
		$email = mysqli_real_escape_string($con,$_POST['Email']);
		$password = mysqli_real_escape_string($con,$_POST['password']);	

		$get_user="select * from users where user_email = '$email' AND user_password='$password'";
		$run_user = mysqli_query($con,$get_user);
		$checks = mysqli_num_rows($run_user);

		if($checks==1){

			$session['user_email']= $email; 
			echo "<script> window.open('timeline-about.html','_self') </script>";
			
		}

		else{
		echo "<script> alert('Email or username is incorrect!') </script>";
		}

	}
	
?>
