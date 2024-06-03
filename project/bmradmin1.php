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

    $sql1 = "UPDATE bmr SET name='$name' WHERE id='$id'";

    if (mysqli_query($conn, $sql1)) {
        echo "<center>Record updated successfully";
    } else {
        echo "Error updating record:</center> " . mysqli_error($conn);
    }
}



if(isset($_POST['delete'])) {
    
    $id = $_POST['id'];

    $sql2 = "DELETE FROM bmr WHERE id = '$id'";
    
    if(mysqli_query($conn, $sql2)) {
        echo "<center>Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn)."</center>";
    }
}


if(isset($_POST['ShowAll'])) {


$sql3 = "SELECT * FROM bmr";
$result = $conn->query($sql3);
echo"<center><h1>BMR ADMIN<h1></center>";
echo "<center><table style='border: 1px solid black;'>";
echo "<tr><th>ID</th><th>Name</th><th>gender</th><th>age</th><th>height</th><th>weight</th><th>bmr</th></tr>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td style='border: 1px solid black;'>".$row["id"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["name"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["gender"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["age"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["height"]."</td>";
     echo "<td style='border: 1px solid black;'>".$row["weight"]."</td>";
    echo "<td style='border: 1px solid black;'>".$row["bmr"]."</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='3'>No results found</td></tr>";
}

echo "</table></center>";
}


mysqli_close($conn);
?>
<center><a href="bmradmin.php">Back</a></center>
</body>
</form>
</html>

