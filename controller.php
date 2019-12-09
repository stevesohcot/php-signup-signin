<?php include_once("functions.php");?>
	
<?php 

if (array_key_exists('sign_up', $_POST)) {

	// future upgrade: account for SQL injection
	// (ex. use a prepared statement)

	$email 		= $_POST['email'];
	$password	= $_POST['password'];

	/*
		Validation goes here
			- check email format (ex. is there a "@" and a ".")
			- check length of email (number of characters)
			- did someone with this email already sign up?
			- did the user enter a password?
			- additional fields if needed

		Encrypt and SALT the password to make it more secure
	*/

	
	$query = "INSERT INTO Users 
				(`email`,`password`)
				VALUES ('$email','$password')";

	$run_query = mysqli_query($db1, $query);

	// Create Session variable
	// To remember between the individual web pages who the user is
	$_SESSION['User_ID'] = mysqli_insert_id($db1);
	header("Location: index.php");
	exit();
	
}

if (array_key_exists('sign_in', $_POST)) { 

	$email 				= $_POST['email'];
	$password_attempt	= $_POST['password'];

	
	// START Get the REAL password for this user
		$query = "SELECT * FROM Users WHERE email = '$email'";

		$rs = mysqli_query($db1, $query);

		if (!$rs || mysqli_num_rows($rs) == 0) {
			
			// email isn't even in the database; you'll need to handle it accordingly

		} else {
			
			$row 			= mysqli_fetch_array($rs);
			$user_id 		= $row['id'];
			$real_password 	= $row["password"];

		}
	// END Get the REAL password for this user
 

 	// Check to see if the real password matches what the user just entered
	// If so, redirect them to the correct portion of the site
	// Otherwise, inform them of an invalid login


	// Future upgrade: account for if the user checked "remember me"
	
	if ($password_attempt == $real_password) { // right password

		// Create Session variable
		// To remember between the individual web pages who the user is
		$_SESSION['User_ID'] = $user_id;

		header("Location: index.php");
		exit();

	} else { // wrong password

		header("Location: index.php?action=invalid-login");
		exit();

	}

}
?>