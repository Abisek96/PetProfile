
<?php
include ("includes/connection.php");
	
		
	if (isset($_POST['sign_up'])){
		
		$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
		$lastname= mysqli_real_escape_string($con,$_POST['lastname']);
		$email = mysqli_real_escape_string($con,$_POST['Email']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$birth_day= mysqli_real_escape_string($con,$_POST['day']);
		$birth_month = mysqli_real_escape_string($con,$_POST['month']);
		$birth_year = mysqli_real_escape_string($con,$_POST['lastname']);
		$gender = mysqli_real_escape_string($con,$_POST['gender']);
		$city = mysqli_real_escape_string($con,$_POST['city']);
		$country = mysqli_real_escape_string($con,$_POST['country']);
		$status = "unverified";
		$posts = "No";

		if ($gender=='on'){
			$gender= 'male';
		}
		else{
			
			$gender = "female";
		
		}


		$get_email = "select * from users where user_email='$email'";
		$run_email = mysqli_query($con,$get_email);
		$check = mysqli_num_rows($run_email);


		if ($check==1){
			echo "<script> alert('This email is already registered, please try another one !!') </script>";
			exit();
		}
		if (strlen($password)<8){
			echo "<script> alert('Password should be minimum of 8 characters!') </script>";
			exit();
		}


				else{
			$insert= "insert into users(user_fname,user_lname,user_email,user_password,user_bday,user_bmonth,user_byear,user_gender,user_city,user_country,user_image,register_date,last_login,user_status,user_posts) values ('$firstname','$lastname','$email','$password','$birth_day','$birth_month','$birth_year','$gender','$city','$country','cat1.jpg',NOW(),NOW(),'$status','$posts')";


			$run_insert = mysqli_query($con,$insert);	
					if($run_insert){
						$_SESSION["user_email"]= $email;
						echo "<script> alert('Registration successful !') </script>";
						echo "<script> window.open('home.php','_self') </script>";
					}
					else{
							echo "<script> alert('Registration unsuccessful !') </script>";
						exit();	
					}


		}



	
}
?>