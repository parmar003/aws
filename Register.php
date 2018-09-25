<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
     <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
    <style>
 
</style>
<body style="font-size:90%">
   <br/>
        <img class="logo" src="logo.png" /> 
    	<h2 style="text-align:center">Code Violation Management</h2>
	 
	<div class="header">
		<h4>Sign Up</h4>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Firstname</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Enter Firstname" required autofocus>
		</div>
        <div class="input-group">
			<label>Lastname</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>" placeholder="Enter Lastname" required autofocus>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" placeholder="user01@abc.com" required autofocus>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="******" required>
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" placeholder="******" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-success" name="reg_user">Sign Up</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
     <div>
        <br/><br/>
    </div>
</html>