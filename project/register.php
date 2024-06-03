<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h2>Register</h2>
	<form action="register1.php" method="POST">
      <label>Name:</label>
		<input type="text" name="name" required><br><br>
      <label>Email:</label>
		<input type="email" name="email" required><br><br>
		<label>Phone Number:</label>
		<input type="text" name="phone_number" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" name="register" value="Register"><br>

<label>already registered<a href="login.php">login!</a></label>
	</form>
</body>
</html>