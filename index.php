<?php 
	echo "its login, now working..";
	// echo phpinfo();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
 	<a href="register.php">Register</a>
 	
 	<form action="process_form.php" method="post">
	 	<label>Email</label>
	 	<input type="text" name="email" value="" placeholder="Enter your email">
	 	<label>Password</label>
	 	<input type="password" name="password" value="" placeholder="Enter your password">
	 	<input type="hidden" name="login" value="1">
	 	<input type="submit" name="submit"	value="Done">
 	</form>
 </body>
 </html>