<html>
<head>
<title>CRUD admin</title>
</head>
<body>
<form>
<?php

// Establish a database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nutrition";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql1 = "UPDATE bmi SET name='$name' WHERE id='$id'";

    if (mysqli_query($conn, $sql1)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}



if(isset($_POST['delete'])) {
    
    $id = $_POST['id'];

    $sql2 = "DELETE FROM bmi WHERE id = '$id'";
    
    if(mysqli_query($conn, $sql2)) {
        echo "<center>Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn)."</center>";
    }
}


if(isset($_POST['ShowAll'])) {


$sql3 = "SELECT * FROM bmi";
$result = $conn->query($sql3);
echo"<center><h1>BMI ADMIN<h1></center>";
echo "<center><table style='border: 1px solid black;'>";
echo "<tr><th>ID</th><th>Name</th><th>Weight</th><th>Height</th><th>bmr</th></tr>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='border: 1px solid black;'>".$row["id"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["name"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["weight"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["height"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["bmi"]."</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='3'>No results found</td></tr>";
}

echo "</table></center>";
}


mysqli_close($conn);
?>
<center><a href="bmiadmin.php">Back</a></center>
</body>
</form>
</html>

