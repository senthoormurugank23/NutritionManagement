<html>
<head>
<title>Login</title>
</head>
<body>
<form>
<?php
	// Establish database connection
	$con = mysqli_connect("localhost", "root", "", "nutrition");
	
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	
	// Check if login form is submitted
	if(isset($_POST['login'])){
		$phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		
		// Check if phone number exists and password matches
		$query = mysqli_query($con, "SELECT * FROM users WHERE phone_number='$phone_number' AND password='$password'");
		if(mysqli_num_rows($query) > 0)
{
			header("location:main.php");
		}
		else{
			echo "Incorrect phone number or password. Please try again.";
		}
	}
?>
<a href="login.php">Back</a>
</form>
</body>
</html>