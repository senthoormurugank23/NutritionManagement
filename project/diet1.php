<html>
<head>
<title>Diet Plan</title>
<body>
<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutrition";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$weight = $_POST["weight"];


$w1 = $weight*2;

$sql = "SELECT * FROM diet WHERE min1 <= $w1 AND max1 > $w1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output diet plan
  while($row = $result->fetch_assoc()) {
     echo "<table style='border: 1px solid black;'>";
    echo "<tr><th>ID</th><th>breakfast</th><th>snack1</th><th>lunch</th><th>snack2</th><th>dinner</th><th>Total protein</th></tr>";
 
    echo "<tr>";
    echo "<td style='border: 1px solid black;'>".$row["id"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["breakfast"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["snack1"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["lunch"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["snack2"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["dinner"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["total_protein"]."</td>";
    echo "</tr>";
 } 
}
 else 
{
echo "<tr><td colspan='3'>No results found</td></tr></table>";
}

$conn->close();
?>
<a href="diet.php">Back</a>
</body>
</head>
</html>