<html>
<head>
<title>Bmr calculator</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutrition";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name= $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$height = $_POST["height"];
$weight = $_POST["weight"];

if ($gender == "male") {
	$bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
} else {
	$bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
}


$sql = "INSERT INTO bmr (name,gender, age, height, weight, bmr) VALUES ('$name','$gender', '$age', '$height', '$weight', '$bmr')";

if ($conn->query($sql) === TRUE) {
    echo "<b><center>Your BMR is value: " . $bmr."<br><br>";
    echo "<h2>You Have To  Consume".$bmr." calories to maintain your current weight</center><b><h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<br>
<center>
<a href="bmr.php">Back</a>
</center>