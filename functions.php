<?php
	session_start();
	
	// *****************************
	// START Database connection
	// *****************************
	$host = "localhost";
	$user = "root";
	$password = "root";
	
	$db1 = mysqli_connect($host, $user, $password) 
			or die("Could not connect to database");
	
	mysqli_select_db($db1, "sampleLogin");
	// *****************************
	// END Database connection
	// *****************************

	$USER_ID = intval($_SESSION['User_ID']);

?>


<?php function Template_Header() { ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Sign Up / Sign In Tutorial</title>
		<link rel="stylesheet" 
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
			crossorigin="anonymous">
	</head>
	<body>

<?php } ?>

<?php function Template_Footer() { ?>

	</body>
	</html>
	
<?php } ?>