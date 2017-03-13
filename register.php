<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form action="process_form.php" method="post">
		<label>Name:</label>
		<input type="text" name="name" value="" placeholder="Name">
		<label>Email:</label>
		<input type="text" name="email" value="" placeholder="Email">
		<label>Password</label>
		<input type="password" name="password" value="" placeholder="Password">
		<input type="hidden" name="register" value="1">
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>