<?php include_once("functions.php");?>

<?php Template_Header();?>

<div class="container">

	<h1>Welcome to the PHP Sign Up / Sign In tutorial!</h1>
	
	
	<?php if ( isset($_GET['action']) && $_GET['action'] == 'invalid-login') { ?>
		
		<div class="alert alert-danger">
			Invalid login
		</div>

	<?php } ?>




	<?php if ($USER_ID == 0 ) { ?>

		<div class="mt-3">
			You are not currently logged in.
		</div>

		<div class="mt-3">			
			<a href="sign-up.php" class="btn btn-primary">Sign Up</a>
			<a href="sign-in.php" class="btn btn-primary ml-3">Sign In</a>
		</div>

	<?php } else { ?>
		
		<div class="mt-3">
			You have signed in.  Your User ID is <?php print $USER_ID;?>.
		</div>

	<?php } ?>

</div>

<?php Template_Footer();?>