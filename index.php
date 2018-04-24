<!DOCTYPE html>
<?php
session_start();
include("functions/functions.php");
include("home.php");
?>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />  <!--data about data-->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!--size of the viewport on various devices (bootstrap)-->
		<meta name="description" content="Social networking site for pets" />
		<meta name="keywords" content="Social Network, Social Media, Pet profiler, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Pet Profiler</title>

    <!-- Stylesheets
    ================================================= -->
		
   	<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" /> <!-- link tag defines the link between document and external source-->
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/> <!--rel for relation href = link-->
	</head>
	<body>
	
	<?php 
	include ("includes/loginheader.php");
	include ("includes/content.php");
	include ("includes/loginfooter.php");
	?>   
    
	</body>
</html>
