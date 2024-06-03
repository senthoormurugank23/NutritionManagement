<html>
<head>
<title>Bmi calculator</title>
</head>
<body>
<center>
<h3>------------------</h3>
	<table>
			<thead>
				<tr>
					<th>BMI Range</th>
					<th>Category</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Less than 18.5</td>
					<td>Underweight</td>
				</tr>
				<tr>
					<td>18.5 - 24.9</td>
					<td>Normal weight</td>
				</tr>
				<tr>
					<td>25.0 - 29.9</td>
					<td>Overweight</td>
				</tr>
				<tr>
					<td>30.0 - 34.9</td>
					<td>Obese Class I</td>
				</tr>
				<tr>
					<td>35.0 - 39.9</td>
					<td>Obese Class II</td>
				</tr>
				<tr>
					<td>40.0 or greater</td>
					<td>Obese Class III</td>
				</tr>
			</tbody>
		</table>
<h3>------------------</h3>

</center>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutrition";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$name = $_POST["name"];
$weight = $_POST["weight"];
$height = $_POST["height"] / 100; // convert cm to m

$bmi = $weight / ($height * $height);



$sql = "INSERT INTO bmi (name,weight, height, bmi) VALUES ('$name','$weight', '$height', '$bmi')";

if ($conn->query($sql) === TRUE) {
	echo "<div class='container'>";
	echo "<center><h1>Your BMI is " . number_format($bmi, 1) . "</h1>";
	echo "<p>Your data has been saved to the database.</p>";
	echo "<a href='bmi.php'>Calculate again</a></center>";
	echo "</div>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
