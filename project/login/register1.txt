<html>
<head>
<title>registration</title>
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
	
	// Check if registration form is submitted
	if(isset($_POST['register'])){
      $name= $_POST['name'];
      $email=$_POST['email'];
		$phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		
		// Check if phone number already exists
		$query = mysqli_query($con, "SELECT * FROM users WHERE phone_number='$phone_number'");
		if(mysqli_num_rows($query) > 0){
			echo "Phone number already registered. Please login or use a different phone number.";
		}
		else{
			// Insert user into database
			$insert_query = mysqli_query($con, "INSERT INTO users (name,email,phone_number, password) VALUES ('$name','$email','$phone_number', '$password')");
			if($insert_query){
				echo "Registration successful. Please login.";
			}
			else{
				echo "Registration failed. Please try again.";
			}
		}
	}
?>
<center><a href="register.php">back</a></center>

</form>
</body>
</html>