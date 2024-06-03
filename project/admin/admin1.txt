<html>
<head>
<title>admin</title>
</head>
<body>
<form>
<?php
	$con = mysqli_connect("localhost", "root", "", "nutrition");
	
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	
	if(isset($_POST['admin'])){
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		
		$query = mysqli_query($con, "SELECT * FROM admin WHERE name='$name' AND password='$password'");
		if(mysqli_num_rows($query) > 0)
{
			header("location:adminmain.php");
		}
		else{
			echo "Incorrect name or password. Please try again.";
		}
	}
?>
<a href="admin.php">Back</a>
</form>
</body>
</html>