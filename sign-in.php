<?php include_once("functions.php");?>

<?php Template_Header();?>

<div class="container">

	<h1>Sign In</h1>
	
	<form action="controller.php" method="POST">
	    <div class="input-group input-group-lg form-group">
	        <label for="email" class="sr-only">Email</label>
	        <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" />
	    </div>
	          
	    <div class="input-group input-group-lg form-group">
	        <label for="password" class="sr-only">Password</label>
	        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" />
	    </div>

	    <div class="form-group">
	    	<input type="hidden" name="sign_in" value="1" />
	    	<input type="submit" class="btn btn-primary btn-lg" value="Sign In" />
	    	<a href="sign-up.php" class="btn  btn-lg">Sign Up</a>
	    </div> 

	</form>

</div>

<?php Template_Footer();?>